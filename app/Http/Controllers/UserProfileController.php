<?php

namespace App\Http\Controllers;

use App\Services\Contracts\AuthServiceInterface;
use App\Services\Contracts\JobCategoryServiceInterface;
use App\Services\Contracts\UserProfileServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\UserProfile;


class UserProfileController extends Controller
{

    protected $userDatos;
    protected $userProfileService;
    protected $userAuth;

    protected $categoriesService;
    
    public function __construct(UserProfileServiceInterface $userProfileService , AuthServiceInterface $userAuth , UserServiceInterface $userDatos , JobCategoryServiceInterface $categoriesService )
    {
        $this->userProfileService = $userProfileService;
        $this->userAuth = $userAuth;
        $this->userDatos = $userDatos;
        $this->categoriesService = $categoriesService;
        
    }

    public function create()
    {

        if (!$this->userAuth->getAuthenticatedUser()) {
            return view('auth.login')->withErrors(['error' => 'Debe iniciar sesión para acceder a esta página.']);
        }

        $user = $this->userAuth->getAuthenticatedUser();

       if ($user->profile_complete){
            return redirect()->route('profile.personalData' , $user->id);
       }

        $profile = $user->profile ?? new UserProfile();
        return view('profile.createprofile', compact('profile'));
    }

    public function store(Request $request)
{
    $profile = $this->userProfileService->createProfile($request);
    
    $user = $this->userAuth->getAuthenticatedUser();
    
    
    
    return redirect()->route('profile.personalData', $user->id)
                     ->with('success', $profile);
}

    

    public function show($id)
    {
        if (!$this->userAuth->getAuthenticatedUser()) {
            return view('auth.login')->withErrors(['error' => 'Debe iniciar sesión para acceder a esta página.']);
        }

        $user = $this->userAuth->getAuthenticatedUser();
         
        

        if (!$user->profile_complete){
            $profile = $user->profile ?? new UserProfile();
            return view('profile.createprofile', compact('profile'))->withErrors(['error' => 'Debes completar los datos para acceder a esta pag.']);
        }

        $profile = $this->userProfileService->getProfile($id);
        $userData = $this->userDatos->getUserById($id);

        return view('profile.personalData', compact('profile', 'user' , 'userData'));
    }

    public function update(Request $request, $id)
    {
        $this->userProfileService->updateProfile($request);

        return redirect()->route('profile.personalData', $id)
                         ->with('success', 'Perfil actualizado exitosamente.');
    }


    public function uploadProfilePicture(Request $request)
{
    $profile = $this->userProfileService->uploadPicture($request);

    return redirect()->route('profile.personalData', $this->userAuth->getAuthenticatedUser()->id) ->with('success', $profile);
    }




public function deleteProfilePicture()
{
 
    $message = $this->userProfileService->deletePicture();

    
        return redirect()->route('profile.personalData',  $this->userAuth->getAuthenticatedUser()->id)
                         ->with('success', $message);
    }

    

public function updateSummary($profileId, Request $request)
{
    $message = $this->userProfileService->updateProfileSummary($profileId, $request);

    return redirect()->back()->with('success', $message);
}

public function updateEducation($profileId, Request $request)
{
    $message = $this->userProfileService->updateProfileEducation($profileId, $request);

    return redirect()->back()->with('success', $message);
}


public function updateSkills($profileId, Request $request)
{
    $message = $this->userProfileService->updateProfileSkill($profileId, $request);

    return redirect()->back()->with('success', $message);
}



public function showAll()
{
    $jobs = $this->userProfileService->showPubs();    
    $categories = $this->categoriesService->allCategories();

    return view('profile.publicationprofile', compact('jobs', 'categories'));
}

public function showPostulants($jobId)
{
    

    $postulants = $this->userProfileService->showPostulants($jobId);



    return view('profile.postulaciones', compact('postulants'));
}


public function showNotifications(){
    return view('profile.notificacions');
}

public function showProfiles(){
    $profiles = $this->userProfileService->showProfiles();
    return view('profile.profiles' , compact('profiles'));
}

public function showProfileDetail($id){
    $profile = $this->userProfileService->profilePublic($id);

    $workExperiences = $profile->workExperiences()->latest()->take(3)->get();

    return view('profile.profiledetails' , compact('workExperiences','profile'));
}

public function search(Request $request)
    {
        $searchTerm = $request->get('query');

        $profiles = UserProfile::where('first_name', 'LIKE', "%{$searchTerm}%")
                               ->orWhere('last_name', 'LIKE', "%{$searchTerm}%")
                               ->get();

        return response()->json($profiles);
    }

}


