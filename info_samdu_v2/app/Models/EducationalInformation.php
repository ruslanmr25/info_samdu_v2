<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalInformation extends Model
{
    use HasFactory;


    protected $hidden=[
        'department_id'
    ];

    protected $fillable=[
        'student_id',
        'department_id','specialty','group','educationForm','educationType',
        'specialty_code','level','paymentForm','mark'
    ];


    public function students(){
        return $this->belongsTo(Student::class,'student_id_number','student_id');
    }

    public function department()
    {
        return $this->belongsTo(Faculty::class,'department_id','department_id');
    }
}
