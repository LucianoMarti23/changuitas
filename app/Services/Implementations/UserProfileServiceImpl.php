<?php

namespace App\Services\Implementations;
use App\Models\UserProfile;
use App\Services\Contracts\JobServiceInterface;
use App\Services\Contracts\UserProfileServiceInterface;
use Illuminate\Http\Request;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Support\Facades\Storage;

class UserProfileServiceImpl implements UserProfileServiceInterface
{
    protected $authService;

    protected $jobService;

    public function __construct(AuthServiceInterface $authService  , JobServiceInterface $jobService)
    {
        $this->authService = $authService;
        $this->jobService = $jobService;
    }

    public function getProfile($userId)
    {
        $user = $this->authService->getAuthenticatedUser();

        if ($user->id != $userId) {
            abort(403, 'Acceso denegado');
        }

        return $user->profile;
    }

    public function createProfile(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'birthday' => 'required|date',
        'sex' => 'required|in:female,male,other',
        'address' => 'required|string|max:255',
        'provincia' => 'required|string|max:255', // Debería coincidir con el nombre en el formulario
        'localidad' => 'required|string|max:255', // Debería coincidir con el nombre en el formulario
        'phone' => 'required|string|max:15',
        'dni' => 'required|string|max:20',
    ]);
    
    // Obtener el usuario autenticado
    $user = $this->authService->getAuthenticatedUser();
    
    $profile = new UserProfile();
    
    $profile->user_id = $user->id;
    $profile->first_name = $request->first_name;
    $profile->last_name = $request->last_name;
    $profile->birth_date = $request->birthday;
    $profile->gender = $request->sex;
    $profile->address = $request->address;
    $profile->province = $request->provincia; // Verifica que el nombre coincida con el formulario
    $profile->locality = $request->localidad; // Verifica que el nombre coincida con el formulario
    $profile->phone_number = $request->phone;
    $profile->document_number = $request->dni;

    // Manejar la subida de la foto de perfil
    if ($request->hasFile('profile_picture')) {
        $file = $request->file('profile_picture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('profile_pictures', $fileName, 'public');

        // Eliminar la imagen antigua si existe
        if ($profile->profile_picture) {
            Storage::disk('public')->delete($profile->profile_picture);
        }

        // Guarda la nueva ruta de la imagen en el perfil del usuario
        $profile->profile_picture = $filePath;
    }

    $profile->save();
    
    // Actualiza el estado del usuario
    $user->profile_complete = true;
    $user->save();
    
    return 
         'Perfil creado exitosamente.';
}
    

    public function updateProfile(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'sex' => 'required|in:female,male,other',
            'address' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'localidad' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'dni' => 'required|string|max:20',
        ]);
    
        // Obtener el usuario autenticado
        $user = $this->authService->getAuthenticatedUser();
    
        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'Debe iniciar sesión para acceder a esta página.']);
        }
    
        // Obtener el perfil del usuario autenticado
        $profile = $user->profile;
    
        if (!$profile) {
            return redirect()->back()->withErrors('No se encontró el perfil.');
        }
    
        // Actualizar los datos del perfil
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->birth_date = $request->birthday;
        $profile->gender = $request->sex;
        $profile->address = $request->address;
        $profile->province = $request->provincia;
        $profile->locality = $request->localidad;
        $profile->phone_number = $request->phone;
        $profile->document_number = $request->dni;
        $profile->save();
    
        return redirect()->route('profile.personalData', $profile->user_id)->with('success', 'Perfil actualizado con éxito.');
    }
    


    public function updateProfileSummary($profileId, Request $request)
{
    // Validar la entrada
    $request->validate([
        'profile_summary' => 'nullable|string|max:1000', // Ajusta las reglas según lo necesites
    ]);

    // Buscar el perfil por ID
    $userProfile = UserProfile::findOrFail($profileId);

    // Actualizar el campo profile_summary
    $userProfile->update([
        'profile_summary' => $request->input('profile_summary'),
    ]);

    // Retornar una respuesta, puede ser redirección o mensaje
    return 'Resumen actualizado correctamente!';
}


public function updateProfileEducation($profileId, Request $request)
{
    // Validar la entrada
    $request->validate([
        'education' => 'nullable|string|max:1000', // Ajusta las reglas según lo necesites
    ]);

    // Buscar el perfil por ID
    $userProfile = UserProfile::findOrFail($profileId);

    // Actualizar el campo profile_summary
    $userProfile->update([
        'education' => $request->input('education'),
    ]);

    // Retornar una respuesta, puede ser redirección o mensaje
    return ' Education actualizado correctamente!';
}

public function updateProfileSkill($profileId, Request $request)
{
    // Validar la entrada
    $request->validate([
        'skills' => 'nullable|string|max:1000', // Ajusta las reglas según lo necesites
    ]);

    // Buscar el perfil por ID
    $userProfile = UserProfile::findOrFail($profileId);

    // Actualizar el campo profile_summary
    $userProfile->update([
        'skills' => $request->input('skills'),
    ]);

    // Retornar una respuesta, puede ser redirección o mensaje
    return 'Hablidades actualizado Correctamente!';
}

public function showPubs(){

    $userId = $this->authService->getAuthenticatedUser()->id;

    $jobs = $this->jobService->showAllPubsForId($userId);

    return $jobs;

}



public function showPostulants($jobId)
{
    $job = $this->jobService->show($jobId);
    // Obtener la publicación de trabajo específica
    // Asegúrate de manejar la excepción si no se encuentra

    // Obtener todos los postulantes (JobApplication) para esa publicación
    $postulants = $job->applications()->with('userProfile')->get();

    // Pasar los postulantes a la vista
    return $postulants;
}

public function uploadPicture(Request $request){
    
    

    // Validar los datos del formulario
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);
    
    // Obtener el usuario autenticado
    $user = $this->authService->getAuthenticatedUser();
    
    // Buscar el perfil del usuario
    $profile = UserProfile::where('user_id', $user->id)->first();
    
    if (!$profile) {
        return response()->json(['error' => 'Perfil no encontrado.'], 404);
    }

    // Manejar la subida de la nueva foto de perfil
    if ($request->hasFile('profile_picture')) {
        $file = $request->file('profile_picture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('profile_pictures', $fileName, 'public');

        // Eliminar la imagen antigua si existe
        if ($profile->profile_picture) {
            Storage::disk('public')->delete($profile->profile_picture);
        }

        // Guarda la nueva ruta de la imagen en el perfil del usuario
        $profile->profile_picture = $filePath;
    }

    $profile->save();
    
    return  'Foto de perfil actualizada exitosamente.';

}


public function deletePicture(){

$user = $this->authService->getAuthenticatedUser();
$profile = $user->profile;

if ($profile && $profile->profile_picture) {
    // Eliminar la imagen del almacenamiento
    Storage::disk('public')->delete($profile->profile_picture);
    // Eliminar la referencia de la imagen en el perfil
    $profile->profile_picture = null;
    $profile->save();

    return  'Foto de perfil eliminada exitosamente.';
}
return 'No se encontró ninguna foto de perfil para eliminar.';


}

}