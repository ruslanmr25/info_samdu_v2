<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id_number',
        'passport',
        'get_passport',
        'JSHSHIR',
        'nationality',
        'last_name',
        'first_name',
        "third_name",

        'gender',
        'birthday',
        'citizenship',


        'phone',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class,'students_id');
    }
}
