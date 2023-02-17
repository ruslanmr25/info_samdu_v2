<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'iron_notebook', 'youth_notebook', 'orphan', 'amputatuion', 'ligota', 'iab_child', 'military_child', 'desert', 'woman', 'purpose',
    ];


    public function students()
    {
        return $this->belongsTo(Student::class,'students_id');
    }
}
