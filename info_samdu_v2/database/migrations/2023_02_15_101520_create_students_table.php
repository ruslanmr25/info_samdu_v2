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
        Schema::create('students', function (Blueprint $table) {

            $table->bigInteger('student_id_number')->unsigned()->primary();
            $table->string('passport')->unique();
            $table->string('get_passport');
            $table->bigInteger('JSHSHIR');
            $table->string('nationality');
            $table->string('last_name');
            $table->string('first_name');
            $table->string("third_name");

            $table->string('gender');
            $table->date('birthday');
            $table->string('citizenship');

            $table->string('phone');
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
        Schema::dropIfExists('students');
    }
};
