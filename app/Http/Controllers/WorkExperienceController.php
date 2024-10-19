<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use App\Models\UserProfile;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Mostrar una lista de todas las experiencias laborales de un usuario.
     */


     protected $userAuth;

     public function __construct( AuthServiceInterface $userAuth )
    {

        $this->userAuth = $userAuth;
      
    }
    public function index()
    {

        $userProfile = $this->userAuth->getAuthenticatedUser();

        $userId = $userProfile->id;

        // Encontrar el perfil del usuario por su ID
        $userProfile = UserProfile::where('user_id', $userId)->firstOrFail();

        // Obtener todas las experiencias laborales del usuario
        $workExperiences = $userProfile->workExperiences;

        return view('profile.workexperience', compact('workExperiences', 'userProfile'));
    }

    /**
     * Mostrar el formulario para crear una nueva experiencia laboral.
     */
  

    /**
     * Almacenar una nueva experiencia laboral en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de los datos de la experiencia laboral
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'current' => 'boolean',
        ]);

        // Encontrar el perfil del usuario
        $userProfile = UserProfile::where('user_id', $this->userAuth->getAuthenticatedUser()->id )->firstOrFail();

        // Crear una nueva experiencia laboral asociada al usuario
        $userProfile->workExperiences()->create($request->all());

        return redirect()->route('work_experiences.index', $this->userAuth->getAuthenticatedUser()->id)
                         ->with('success', 'Experiencia laboral creada con éxito.');
    }

    /**
     * Mostrar el formulario para editar una experiencia laboral existente.
     */
    public function edit($userId, $id)
    {
        // Encontrar el perfil del usuario y la experiencia laboral
        $userProfile = UserProfile::where('user_id', $userId)->firstOrFail();
        $workExperience = $userProfile->workExperiences()->findOrFail($id);

        return view('work_experiences.edit', compact('workExperience', 'userProfile'));
    }

    /**
     * Actualizar una experiencia laboral existente en la base de datos.
     */
    public function update(Request $request, $userId, $id)
    {
        // Validación de los datos de la experiencia laboral
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'current' => 'boolean',
        ]);

        // Encontrar el perfil del usuario y la experiencia laboral
        $userProfile = UserProfile::where('user_id', $userId)->firstOrFail();
        $workExperience = $userProfile->workExperiences()->findOrFail($id);

        // Actualizar los datos de la experiencia laboral
        $workExperience->update($request->all());

        return redirect()->route('work_experiences.index', $userId)
                         ->with('success', 'Experiencia laboral actualizada con éxito.');
    }

    /**
     * Eliminar una experiencia laboral.
     */
    public function destroy($id)
    {
        // Encontrar el perfil del usuario y la experiencia laboral
        $userProfile = UserProfile::where('user_id', $this->userAuth->getAuthenticatedUser()->id)->firstOrFail();
        $workExperience = $userProfile->workExperiences()->findOrFail($id);

        // Eliminar la experiencia laboral
        $workExperience->delete();

        return redirect()->route('work_experiences.index')
                         ->with('success', 'Experiencia laboral eliminada con éxito.');
    }
}

