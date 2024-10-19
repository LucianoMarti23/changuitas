<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Si tienes relaciones, puedes definirlas aquí. Ejemplo:
    // public function jobs()
    // {
    //     return $this->hasMany(Job::class);
    // }
}
