<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('jobs', function (Blueprint $table) {
        $table->text('job_benefits')->nullable(); // Campo para los beneficios
        $table->text('job_requirements')->nullable(); // Campo para los requisitos
    });
}

public function down()
{
    Schema::table('jobs', function (Blueprint $table) {
        $table->dropColumn(['job_benefits', 'job_requirements']);
    });
}
};
