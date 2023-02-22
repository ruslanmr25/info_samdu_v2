<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelative extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id','relatives','is_married'
    ];

    public function students()
    {
        return $this->belongsTo(Student::class,'student_id_number','student_id');
    }
}
