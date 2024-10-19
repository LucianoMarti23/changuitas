<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Services\Contracts\JobCategoryServiceInterface;
use Illuminate\Http\Request;

class JobCategoryController extends Controller

    

{

    protected $categoryService;

    public function __construct(JobCategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
      
    }
    
    public function index()
    {
        $categories = $this->categoryService->allCategories();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

 
    public function store(Request $request)
    {
        $message = $this->categoryService->storeCategory($request);

        return redirect()->route('admin.category')->with('success', $message);
    }


    public function edit($id)
    {
        $category = $this->categoryService->editCategory($id);
        return view('admin.category.edit', compact('category')); // Devuelve la vista de edición
    }
    

    public function update(Request $request, $id)
    {
        $message = $this->categoryService->updateCategory($request , $id);
    
        return redirect()->route('admin.category')->with('success', $message);
    }
    

    public function destroy($id)
    {
      
        $category = $this->categoryService->destroyCategory($id);
        
        return redirect()->route('admin.category')->with('success', $category);
    }
    public function searchCategories(Request $request)
    {
        $query = $request->get('query', '');
        $order = $request->get('order', '');
        // Filtrar categorías según el nombre usando LIKE
        $categories = JobCategory::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', '%' . $query . '%');
        });
        switch ($order) {
            case 'name_asc':
                $categories = $categories->orderByRaw('LOWER(name) ASC'); // Orden A-Z (insensible a mayúsculas)
                break;
            case 'name_desc':
                $categories = $categories->orderByRaw('LOWER(name) DESC'); // Orden Z-A (insensible a mayúsculas)
                break;
        }
        

        // Obtener las categorías filtradas
        $categories = $categories->get();

        // Renderiza la vista parcial y devuelve el HTML
        $view = view('partials.categories_table', ['categories' => $categories])->render();

        return response()->json(['html' => $view]);
    }
    
}
