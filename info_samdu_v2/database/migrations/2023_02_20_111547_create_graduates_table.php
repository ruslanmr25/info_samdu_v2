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
        Schema::create('graduates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('student_id_number')->on('students')->onDelete('CASCADE');
            $table->string('diploma')->nullable();
            $table->date('diploma_date')->nullable();
            $table->string('finish_collage');
            
            $table->string('finish_speciality');
            $table->string('finish_educationForm');

            $table->string('finish_university')->nullable();
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
        Schema::dropIfExists('graduates');
    }
};
