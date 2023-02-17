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
        Schema::create('additional_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('CASCADE');
            $table->integer('iron_notebook')->nullable();
            $table->integer('youth_notebook')->nullable();
            $table->integer('orphan')->nullable();
            $table->integer('amputatuion')->nullable();
            $table->integer('ligota')->nullable();
            $table->integer('iab_child')->nullable();
            $table->integer('military_child')->nullable();
            $table->integer('desert')->nullable();
            $table->integer('woman')->nullable();
            $table->integer('purpose')->nullable();



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
        Schema::dropIfExists('additional_information');
    }
};
