<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Clave foránea que referencia a la tabla de usuarios
            $table->string('job_title'); // Puesto de trabajo
            $table->string('company'); // Empresa o negocio
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de finalización (null si sigue en pie)
            $table->boolean('current')->default(false); // Si el trabajo sigue en pie
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_experiences');
    }
}
