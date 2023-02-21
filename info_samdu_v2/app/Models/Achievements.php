<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    use HasFactory;

    protected $fillable=[
        'students_id',
        'scholarship','champion','lang_certificate'
    ];

    public function students()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
