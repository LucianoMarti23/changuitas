<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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

    // Relación para trabajos aplicados
    public function appliedJobs()
    {
        return $this->belongsToMany(Job::class, 'job_applications')->withTimestamps();
    }

    // Método para verificar si el usuario ha aplicado a un trabajo
    public function hasAppliedForJob($jobId)
    {
        // Usa la relación `appliedJobs` para verificar si el usuario ha aplicado al trabajo
        return $this->appliedJobs()->where('job_id', $jobId)->exists();
    }

    public function userProfile()
{
    return $this->hasOne(UserProfile::class);
}

}
