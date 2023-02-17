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
        Schema::create('educational_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->references('id')->on('students')->onDelete('CASCADE');
            $table->string('depatrment');
            $table->string('specialty');
            $table->string('group');
            $table->string('educationForm');
            $table->string('educationType');
            $table->bigInteger('specialty_code');
            $table->string('level');
            $table->integer('paymentForm');
            $table->bigInteger('mark');
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
        Schema::dropIfExists('educational_information');
    }
};
