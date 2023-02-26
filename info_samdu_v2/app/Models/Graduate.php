<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    use HasFactory;


    protected $fillable=[
        'finish_educationForm',
        'finish_speciality','finish_collage_date','finish_collage',
        'diploma_date',
        'diploma','student_id','finish_university'
    ];



    public function students()
    {
        return $this->belongsTo(Student::class,'student_id_number','student_id');
    }
}
