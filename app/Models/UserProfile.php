<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    // app/Models/UserProfile.php
protected $fillable = [
    'user_id',
    'first_name',
    'last_name',
    'birth_date',
    'gender',
    'address',
    'province',
    'locality',
    'phone_number',
    'document_number',
    'profile_picture',
    'profile_summary',
    'skills',
    'education',
    'cv_path',  // Agregamos el campo 'cv_path'
];


    // Relación con las experiencias laborales: un perfil puede tener muchas experiencias laborales
    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class, 'user_id', 'user_id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'user_id', 'user_id');
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'user_id', 'user_id');
    }
}

