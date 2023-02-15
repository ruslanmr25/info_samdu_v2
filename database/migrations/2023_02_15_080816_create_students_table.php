<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unique();
            $table->string('passport')->unique();
            $table->date('get_passport');
            $table->bigInteger('JSHSHIR')->uniqie();
            $table->string('nationality');
            $table->string('last_name');
            $table->string('first_name');
            $table->string("third_name");
            
            $table->string('gender');
            $table->date('birthday');
            $table->string('citizenship');
            $table->string('country');
            $table->string('province');
            $table->string('disctrict');
            $table->string('city')->nullable();
            $table->string('residintial_adress');
            $table->string('phone');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
