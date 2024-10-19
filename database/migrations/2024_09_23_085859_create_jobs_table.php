<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained('job_categories')->onDelete('cascade');
            $table->string('job_title'); // Puesto de trabajo
            $table->enum('modality', ['presencial', 'hibrida', 'remoto']);
            $table->enum('work_schedule', ['Full time', 'Part time']);
            $table->string('province');
            $table->string('locality');
            $table->text('job_description'); // Descripción del empleo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
