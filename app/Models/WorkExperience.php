<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'job_title', 'company', 'start_date', 'end_date', 'current'];

    // Relación inversa: cada experiencia laboral pertenece a un perfil de usuario
    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'user_id', 'user_id');
    }
}
