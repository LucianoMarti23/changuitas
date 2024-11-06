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
    Schema::table('users', function (Blueprint $table) {
        // Agregar el campo last_interaction
        $table->timestamp('last_interaction')->nullable()->after('updated_at');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Eliminar el campo last_interaction en caso de rollback
        $table->dropColumn('last_interaction');
    });
}

};
