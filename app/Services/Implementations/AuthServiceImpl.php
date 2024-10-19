<?php

namespace App\Services\Implementations;


use App\Services\Contracts\AuthServiceInterface;


use Illuminate\Support\Facades\Auth;


class AuthServiceImpl implements AuthServiceInterface{


    public function checkadmin()
    {
        $user = Auth::user();
        if ($user === null || $user->role !== 'admin') {
            abort(404, 'Not Found.');
        }
    }

    public function getAuthenticatedUser()
    {
        // Obtén el usuario autenticado
        return Auth::user();
    }


}