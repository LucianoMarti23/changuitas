<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes; // ← agregar esto

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes; // ← agregar SoftDeletes aquí

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_complete',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at']; // ← opcional pero recomendable

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }

    // Relación para trabajos aplicados
    public function appliedJobs()
    {
        return $this->belongsToMany(Job::class, 'job_applications')->withTimestamps();
    }

    // Método para verificar si el usuario ha aplicado a un trabajo
    public function hasAppliedForJob($jobId)
    {
        return $this->appliedJobs()->where('job_id', $jobId)->exists();
    }
}
