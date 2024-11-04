<?php

namespace App\Services\Implementations;

use App\Models\Job;
use App\Services\Contracts\JobServiceInterface;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Services\Contracts\AuthServiceInterface;

class JobServiceImpl implements JobServiceInterface{




    protected $userAuth;



    public function __construct( AuthServiceInterface $userAuth)
    {
       
        $this->userAuth = $userAuth;
    }



    public function showJobsAndCategory(){

        $jobs = Job::with(['userProfile', 'category'])->get();
        

        return $jobs;

    }

    public function store(Request $request)
{
    $request->validate([
        'job_title' => 'required|string|max:50',
        'modality' => 'required|in:presencial,hibrida,remoto',
        'work_schedule' => 'required|in:Full time,Part time',
        'province' => 'required|string|max:100',
        'locality' => 'required|string|max:100',
        'job_description' => 'required|string|max:255',
        'category_id' => 'required|exists:job_categories,id',
        'job_benefits' => 'required|string|max:255', // Nueva validación para beneficios
        'job_requirements' => 'required|string|max:255', // Nueva validación para requisitos
    ]);

    Job::create([
        'user_id' => $this->userAuth->getAuthenticatedUser()->id,
        'category_id' => $request->category_id,
        'job_title' => $request->job_title,
        'modality' => $request->modality,
        'work_schedule' => $request->work_schedule,
        'province' => $request->province,
        'locality' => $request->locality,
        'job_description' => $request->job_description,
        'job_benefits' => $request->job_benefits, // Guardar beneficios
        'job_requirements' => $request->job_requirements, // Guardar requisitos
    ]);

    return "Publicación Creada";
}


    public function show($id){

        $job = Job::findOrFail($id);
        return $job;
    }
    public function showAllPubsForId($id){


        $jobs = Job::where('user_id', $id)->get();

        return $jobs;

    }

    public function destroy($id)
    {
        // Lógica para eliminar la categoría por ID
        $job = Job::findOrFail($id);
        $job->delete();

        return "Trabajo eliminado correctamente";
    }

    public function updateJob(Request $request , $id){

        $job = Job::findOrFail($id);



        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'modality' => 'required|in:presencial,hibrida,remoto',
            'work_schedule' => 'required|in:Full time,Part time',
            'province' => 'required|string|max:100',
            'locality' => 'required|string|max:100',
            'job_description' => 'required|string',
            'category_id' => 'required|exists:job_categories,id',
        ]);
    
        // Buscar el trabajo por ID
        
    
        $job->update($validatedData);

        return "Trabajo actualizado correctamente";


    }

    public function incrementView($job){
        $job->increment('views');

    }

}