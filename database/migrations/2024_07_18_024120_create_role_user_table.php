<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $teTable) {
            $teTable->id();
            $teTable->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $teTable->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $teTable->timestamps();
        });
    }

    /**
     * Annule les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
};