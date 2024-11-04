<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'job_title',
        'modality',
        'work_schedule',
        'province',
        'locality',
        'job_description',
        'views',
        'job_benefits', // Nuevo campo para beneficios
        'job_requirements', // Nuevo campo para requisitos
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'user_id', 'user_id');
    }
    // App\Models\Job.php

    public function applicants()
    {
        return $this->belongsToMany(User::class, 'job_applications')->withTimestamps();
    }
    
    public function applications()
{
    return $this->hasMany(JobApplication::class);
}


}

