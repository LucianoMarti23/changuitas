<?php

namespace App\Services\Implementations;

use App\Services\Contracts\UserServiceInterface;
use App\Models\User;
class UserServiceImpl implements UserServiceInterface

{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function updateUser($id, array $data)
    {
        // Buscar al usuario por ID
        $user = User::findOrFail($id);
    
        // Validar que el nombre y el email no estén en uso por otros usuarios
        $validator = \Validator::make($data, [
            'name' => [
                'required',
                'string',
                'max:255',
                // Excluir el usuario actual de la validación
                \Illuminate\Validation\Rule::unique('users', 'name')->ignore($user->id),
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                // Excluir el usuario actual de la validación
                \Illuminate\Validation\Rule::unique('users', 'email')->ignore($user->id),
            ],
        ]);
    
        // Si la validación falla, lanzar una excepción
        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    
        // Actualizar los datos del usuario
        $user->update($data);
    
        return $user;
    }
    

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }



    
}









