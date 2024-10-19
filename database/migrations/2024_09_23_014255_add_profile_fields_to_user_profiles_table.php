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
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->text('profile_summary')->nullable();
            $table->text('skills')->nullable();
            $table->text('education')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn(['profile_summary', 'skills', 'education']);
        });
    }
};
