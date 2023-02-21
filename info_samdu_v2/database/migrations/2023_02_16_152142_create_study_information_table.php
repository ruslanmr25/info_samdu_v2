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
        Schema::create('study_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->references('student_id_number')->on('students')->onDelete('CASCADE');






            $table->string('enter_order');
            $table->date('enter_date');
            $table->string('enter_comment')->nullable();
            $table->string('leave_order')->nullable();
            $table->date('leave_date')->nullable();
            $table->string('academic_holiday')->nullable();
            $table->date('academic_holiday_date')->nullable();
            $table->string('first_to_second')->nullable();
            $table->date('first_to_second_date')->nullable();
            $table->string('second_to_third')->nullable();
            $table->date('second_to_third_date')->nullable();

            $table->string('third_to_fourth')->nullable();
            $table->date('third_to_fourth_date')->nullable();
            $table->string('stay_command')->nullable();
            $table->date('stay_date')->nullable();
            $table->string('sorry_command')->nullable();
            $table->date('sorry_command_date')->nullable();
            $table->string('finish_command')->nullable();
            $table->date('finish_command_date')->nullable();
            $table->string('finish_index')->nullable();
            $table->text('finish_commment')->nullable();


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
        Schema::dropIfExists('study_information');
    }
};
