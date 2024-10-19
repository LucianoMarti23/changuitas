<?php

namespace App\Services\Contracts;
use Illuminate\Http\Request;


interface JobServiceInterface {

    public function showJobsAndCategory();

    public function store(Request $request);


    public function show($id);


    public function showAllPubsForId($id);


    public function destroy($id);


    public function updateJob(Request $request , $id);

    public function incrementView(Job $job);

}
