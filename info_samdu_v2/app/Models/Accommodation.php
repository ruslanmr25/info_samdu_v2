<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id',
        'accommodation',
        'country',
        'province',
        'disctrict',
        'city',
        'residintial_adress',

    ];



    function students()
    {
        return $this->belongsTo(Student::class,'student_id_number','student_id');
    }
}
