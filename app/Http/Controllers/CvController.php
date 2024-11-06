<?php

// app/Http/Controllers/CvController.php
namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    // Función para mostrar el formulario de subida
    public function showForm()
    {
        $userProfile = UserProfile::where('user_id', Auth::id())->first();
        return view('userProfile.upload', compact('userProfile'));
    }

    // Función para manejar la subida del currículum
    public function uploadCv(Request $request)
    {
        // Validar el archivo subido
        $request->validate([
            'cv' => 'required|file|mimes:pdf,doc,docx|max:10240',  // Limitar el tamaño del archivo a 10MB
        ]);

        // Obtener el archivo
        $file = $request->file('cv');

        // Generar un nombre único para el archivo
        $fileName = 'cv_' . time() . '.' . $file->getClientOriginalExtension();

        // Almacenar el archivo en el almacenamiento público
        $filePath = $file->storeAs('cvs', $fileName, 'public');

        // Obtener el perfil del usuario autenticado
        $userProfile = UserProfile::where('user_id', Auth::id())->first();

        // Si el perfil ya existe, actualizamos el campo 'cv_path'
        if ($userProfile) {
            $userProfile->cv_path = $filePath;
            $userProfile->save();
        } else {
            // Si no existe, creamos un nuevo perfil
            UserProfile::create([
                'user_id' => Auth::id(),
                'cv_path' => $filePath,
            ]);
        }

        return back()->with('success', '¡Currículum subido exitosamente!');
    }
}


