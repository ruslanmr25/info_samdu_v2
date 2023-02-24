<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable=[
        'department_id','name'
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'department_id','department_id');
    }
}
