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
        'diploma','students_id'
    ];



    public function students()
    {
        return $this->belongsTo(Student::class,'students_id');
    }
}
