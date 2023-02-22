<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->timestamps();
        });
        Schema::create('users_roles',function(Blueprint $table){
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreignId('roles_id')->references('id')->on('roles')->onDelete('CASCADE');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
        Schema::dropIfExists('roles');
    }
};
