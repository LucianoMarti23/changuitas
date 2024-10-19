<?php

namespace App\Services\Implementations;


use App\Services\Contracts\JobCategoryServiceInterface;


use App\Models\JobCategory;

use Illuminate\Http\Request;


class JobCategoryServiceImpl implements JobCategoryServiceInterface {

    public function allCategories(){
        
        $categories = JobCategory::all();
        return $categories;

    }

    public function storeCategory(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        JobCategory::create($request->all());

        return "Categoria creada";

    }


    public function editCategory($id){

        $category = JobCategory::findOrFail($id); // Obtiene la categoría por ID

        return $category;
    }


    public function destroyCategory($id){
        $category = JobCategory::findOrFail($id);
        $category->delete();

        return "Categoria eliminada con exito";
    }


    public function updateCategory(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
    
        $category = JobCategory::findOrFail($id);
        $category->update($request->only('name', 'description'));

        return "Categoria actualizada con exito";

    }
}
