<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        if (Auth::check()) {
            return redirect('/'); // Redirige a la página de bienvenida
        }
        return view('login.register'); // Muestra el formulario de registro
    }

    public function previewStorePassword(Request $request){

 try {
        $request->validate(['password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'confirmed'
            ],
            
        ]);

        return response()->json([
            'available' => true,
            'message' => 'El  está disponible.'
        ], 200);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'available' => false,
            'message' => 'El formato no es valido.'
        ], 200);
    }

    }


    public function previewStoreName(Request $request)
{
    try {
        // Validar el campo 'name' con la regla 'unique'
         $request->validate([
            'name' => 'required|string|max:255|unique:users,name'
        ]);

        // Si pasa la validación, el nombre está disponible
        return response()->json([
            'available' => true,
            'message' => 'El nombre está disponible.'
        ], 200);
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Si falla la validación, el nombre no está disponible
        return response()->json([
            'available' => false,
            'message' => 'El nombre ya está en uso.'
        ], 200);
    }
    
}

public function previewStoreEmail(Request $request){

    try {
        $request->validate(['email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
            ],
            
        ]);

        return response()->json([
            'available' => true,
            'message' => 'El email está disponible.'
        ], 200);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'available' => false,
            'message' => 'El email ya está en uso.'
        ], 200);
    }

    
}



    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'confirmed'
            ],
        ]);
        

        $data['password'] = bcrypt($data['password']);

        try {
            $this->userService->createUser($data);
            return redirect()->route('auth')->with('success', 'Registro exitoso. Por favor, inicia sesión.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }





// En tu UserController
public function getUsersHtml(Request $request)
{
    $role = $request->get('role', '');
    $order = $request->get('order', '');
    $search = $request->get('search', ''); // Agregar este parámetro

    // Filtrar usuarios según el rol
    $users = User::when($role, function ($query) use ($role) {
            return $query->where('role', $role);
        })
        // Filtrar usuarios según el nombre usando LIKE
        ->when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%'); // Coincidencia parcial
        });

    // Ordenar los usuarios
    switch ($order) {
        case 'name_asc':
            $users = $users->orderByRaw('LOWER(name) ASC'); // Ordenar por nombre en minúsculas
            break;
        case 'name_desc':
            $users = $users->orderByRaw('LOWER(name) DESC'); // Ordenar por nombre en minúsculas
            break;
        case 'date_asc':
            $users = $users->orderBy('created_at', 'asc'); // Ordenar por fecha de creación
            break;
        case 'date_desc':
            $users = $users->orderBy('created_at', 'desc'); // Ordenar por fecha de creación
            break;
    }

    // Obtener los usuarios filtrados
    $users = $users->get();

    // Devolver el HTML de la tabla
    return view('partials.user_table', compact('users'))->render();
}



}
