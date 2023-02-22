<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalInformation extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id',
        'department','specialty','group','educationForm','educationType',
        'specialty_code','level','paymentForm','mark'
    ];


    public function students(){
        return $this->belongsTo(Student::class,'student_id_number','student_id');
    }
}
