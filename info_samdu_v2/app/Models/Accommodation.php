<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable=[
        'accommodation',
        'country',
        'province',
        'disctrict',
        'city',
        'residintial_adress',
        'students_id'
    ];



    function students()
    {
        return $this->belongsTo(Student::class,'students_id');
    }
}
