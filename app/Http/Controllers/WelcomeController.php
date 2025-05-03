<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;



class WelcomeController extends Controller
{
    public function index()
    {
        $jobCount = Job::count();
        $userCount = User::count();

        return view('welcome' , compact('userCount' , 'jobCount'));
    }
}
