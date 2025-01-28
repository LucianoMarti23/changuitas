<?php
namespace App\Http\Controllers;
use App\Services\Contracts\JobCategoryServiceInterface;
use App\Services\Contracts\JobServiceInterface;
use App\Models\JobApplication;
use App\Notifications\JobApplicationNotification;
use App\Models\Job;
use Illuminate\Http\Request;


class JobController extends Controller

    
{

    protected $jobService;

    protected $jobCategoryService;


    public function __construct(JobServiceInterface $jobService , JobCategoryServiceInterface $jobCategoryService) 
    {
        $this->jobService = $jobService;
        $this->jobCategoryService = $jobCategoryService;
    
    }




    public function index()
    {

        $jobs = $this->jobService->showJobsAndCategory();
    
        $categories = $this->jobCategoryService->allCategories();

        $provinces = Job::select('province')  // Seleccionamos el campo de la provincia
                    ->distinct()  // Obtenemos valores únicos
                    ->orderBy('province')  // Opcional: ordenar alfabéticamente
                    ->get();


        return view('jobs.index', compact('jobs' , 'categories' , 'provinces'));
    }



    public function store(Request $request)
{
    $message = $this->jobService->store($request);

    return redirect()->route('jobs')->with('success', $message);
}

    public function show($jobId)
    {
        $job = $this->jobService->show($jobId);
        $categories = $this->jobCategoryService->allCategories();
        return view('profile.editpublication', compact('job' , 'categories'));
    }

    public function showInfo($jobId)
    {
        $job = $this->jobService->show($jobId);

        $this->jobService->incrementView($job);

        return view('jobs.jobinfo', compact('job'));
    }

    public function updateJob(Request $request, $id)
    {
       

      $message =  $this->jobService->updateJob($request , $id);
    
        return redirect()->route('profile.publicaciones')->with('success', $message);
    }
       
    


    public function destroy($id)
    {
        $message = $this->jobService->destroy($id); 
    
        return redirect()->route('profile.publicaciones')->with('success', $message);
    }
    // App\Http\Controllers\JobController.php

    public function apply($id)
{
    $user = auth()->user(); // Obtener el usuario autenticado
    $jobPostulate = $this->jobService->show($id); // Obtener la publicación del trabajo

    // Verificar si ya está postulado
    if ($jobPostulate->applicants()->where('user_id', $user->id)->exists()) {
        return redirect()->back()->with('message', 'Ya estás postulado a este trabajo.');
    }

    // Obtener el perfil de usuario asociado al usuario autenticado
    $userId = $user->userProfile->profile_picture ;

    $userProfile = $user->userProfile; // Asegúrate de que exista esta relación en el modelo User

    // Comprobar si el perfil de usuario existe
    if (!$userProfile) {
        return redirect()->back()->with('message', 'No se encontró el perfil de usuario.');
    }

    // Crear una nueva aplicación de trabajo
    $jobApplication = new JobApplication();
    $jobApplication->job_id = $jobPostulate->id;
    $jobApplication->user_id = $user->id;
    $jobApplication->user_profile_id = $userProfile->id; // Establecer user_profile_id

    // Guardar la aplicación
    $jobApplication->save();

    // Obtener el empleador y enviar la notificación
    $employer = $jobPostulate->user; // Suponiendo que 'user' es la relación que indica al empleador
    $employer->notify(new JobApplicationNotification($user->name, $jobPostulate->job_title ,$jobApplication->job_id , $userId ));

    return redirect()->back()->with('message', 'Te has postulado exitosamente.');
}
    


public function cancelApplication($jobId)
{
    // Obtener el usuario autenticado
    $user = auth()->user();

    // Buscar la aplicación correspondiente
    $application = JobApplication::where('job_id', $jobId)
                                 ->where('user_id', $user->id)
                                 ->first();

    // Verificar si la aplicación existe
    if ($application) {
        // Eliminar la aplicación
        $application->delete();
        return redirect()->back()->with('message', ' Postulacion cancelada exitosamente.');
    }

    return response()->json(['message' => 'No se encontró la postulación.'], 404);
}


public function markAsRead()
{
    $user = auth()->user();
    $user->notifications()->whereNull('read_at')->where('data->type' , 'job_application')->update(['read_at' => now()]);

    return response()->json(['success' => true]);
}

public function markAsReadMessage()
    {
        $user = auth()->user();
        $user->notifications()->whereNull('read_at')->where('data->type' , 'message')->update(['read_at' => now()]);
        return response()->json(['sucess' => true]);

    }

public function filterByCategory(Request $request)
{
    $filters = [
        'category_id' => $request->input('category_id'),
        'modality' => $request->input('modality'),
        'work_schedule' => $request->input('work_schedule'),
        'province' => $request->input('province'),
        'title' => $request->input('title')
    ];

    // Filtrar trabajos aplicando condiciones dinámicamente
    $jobs = Job::query()
        ->when($filters['category_id'], function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })
        ->when($filters['modality'], function ($query, $modality) {
            return $query->where('modality', $modality);
        })
        ->when($filters['work_schedule'], function ($query, $workSchedule) {
            return $query->where('work_schedule', $workSchedule);
        })
        ->when($filters['province'], function ($query, $province) {
            return $query->where('province', $province);
        })
        ->when($filters['title'], function ($query, $title) {
            return $query->where('job_title', $title);
        })
        ->get();

    // Retornar la vista con los trabajos filtrados
    return view('partials.jobs', compact('jobs'));
}






}



    

