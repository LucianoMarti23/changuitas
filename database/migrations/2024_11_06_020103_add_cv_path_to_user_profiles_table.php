<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_cv_path_to_user_profiles_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCvPathToUserProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('cv_path')->nullable();  // Agregamos el campo para la ruta del currículum
        });
    }

    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('cv_path');  // Eliminamos el campo si se hace rollback
        });
    }
}

