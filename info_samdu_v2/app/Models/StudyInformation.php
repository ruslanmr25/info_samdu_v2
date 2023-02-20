<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyInformation extends Model
{
    use HasFactory;

    protected $fillable=[
        'enter_order',
        'enter_date',
        'enter_comment',
        'leave_order',
        'leave_date',
        'academic_holiday',
        'academic_holiday_date',
        'first_to_second',
        'first_to_second_date',
        'second_to_third',
        'second_to_third_date',

        'third_to_fourth',
        'third_to_fourth_date',
        'stay_command',
        'stay_date',
        'sorry_command',
        'sorry_command_date',
        'finish_command',
        'finish_command_date',
        'finish_index',
        'finish_commment',

    ];
    public function students()
    {
        return $this->belongsTo(Student::class,'students_id');
    }


}
