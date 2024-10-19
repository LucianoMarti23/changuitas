<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Subscription;
use App\Services\Contracts\AuthServiceInterface;
use App\Services\Contracts\JobServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
class AdminUserController extends Controller
{
    protected UserServiceInterface $userService;

    protected AuthServiceInterface $userAuth;

    protected JobServiceInterface $job;
    public function __construct(UserServiceInterface $userService , AuthServiceInterface $userAuth , JobServiceInterface $job)
    {
        $this->userService = $userService;
        $this->userAuth = $userAuth;
        $this->job = $job; 
    }




    // Verifica si el usuario es admin
  

    public function dashboard(){

            $this->userAuth->checkAdmin();

            $subCount = Subscription::count();
            $userCount = User::count();
            $pubCount = Job::count();
            $categorias = JobCategory::count();

            return view('admin.dashboard'  , compact('userCount' , 'subCount' ,'pubCount' , 'categorias' ));


    }

    public function index()
    {
        $this->userAuth->checkAdmin();
        $users = $this->userService->getAllUsers();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $this->userAuth->checkAdmin();
        return view('admin.users.create');
    }
    
    public function store(Request $request)
    {
        $this->userAuth->checkAdmin();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Extraer datos del request
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']); // Encriptar la contraseña

        $result = $this->userService->createUser($data);

        if (isset($result['errors'])) {
            return redirect()->back()->withErrors($result['errors'])->withInput();
        }

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit(User $user)
    {
        $this->userAuth->checkAdmin(); // Verificación de rol
        // Usa el servicio para obtener el usuario
        $user = $this->userService->getUserById($user->id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->userAuth->checkAdmin(); // Verificación de rol

        // Extraer los datos validados del request
        $data = $request->only(['name', 'email']);

        try {
            // Llamar al método del servicio para actualizar el usuario
            $user = $this->userService->updateUser($id, $data);
            return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(User $user)
    {
        $this->userAuth->checkAdmin(); // Verificación de rol

        $result = $this->userService->deleteUser($user->id);
        return redirect()->route('users.index')->with('success', $result['message']);
    }


    public function indexPublicaciones(){
        $this->userAuth->checkAdmin();
        $jobs = Job::all();
        $categories = JobCategory::all();
        return view('admin.publications.index', compact('jobs' , 'categories'));
    }

    public function destroyPub($id){
        $this->userAuth->checkAdmin();
        $result =  $this->job->destroy($id);
        return redirect()->route('admin.jobs')->with('success' , $result);


    }

    // Controlador AdminController.php
    public function searchPublications(Request $request)
    {
        $query = $request->get('query', '');
        $orderTitle = $request->get('orderTitle', ''); // Obtener el parámetro de orden por título
        $orderDate = $request->get('orderDate', ''); // Obtener el parámetro de orden por fecha
        $categoryId = $request->get('category_id', ''); // Obtener el parámetro de categoría
    
        // Filtrar publicaciones según el título usando LIKE
        $jobs = Job::with(['category', 'user'])
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('job_title', 'LIKE', '%' . $query . '%');
            })
            ->when($categoryId, function ($queryBuilder) use ($categoryId) {
                return $queryBuilder->where('category_id', $categoryId);
            });
    
        // Ordenar las publicaciones por título
        switch ($orderTitle) {
            case 'title_asc':
                $jobs = $jobs->orderByRaw('LOWER(job_title) ASC'); // Ordenar por título en minúsculas
                break;
            case 'title_desc':
                $jobs = $jobs->orderByRaw('LOWER(job_title) DESC'); // Ordenar por título en minúsculas
                break;
        }
    
        // Ordenar las publicaciones por fecha
        switch ($orderDate) {
            case 'date_asc':
                $jobs = $jobs->orderBy('created_at', 'asc'); // Ordenar por fecha de creación
                break;
            case 'date_desc':
                $jobs = $jobs->orderBy('created_at', 'desc'); // Ordenar por fecha de creación
                break;
        }
    
        // Obtener las publicaciones filtradas
        $jobs = $jobs->get();
    
        // Renderiza la vista parcial y devuelve el HTML
        $view = view('partials.publications_table', ['jobs' => $jobs])->render();
    
        return response()->json(['html' => $view]);
    }
    

    
    



    

}   
