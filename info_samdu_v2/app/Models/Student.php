<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey ='student_id_number';

    protected $fillable=[
        'student_id_number',
        'passport','get_passport',
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

    public function accomodations()
    {
        return $this->hasOne(Accommodation::class,'student_id','student_id_number');
    }

    public function achievement()
    {
        return $this->hasOne(Achievements::class,'student_id','student_id_number');
    }



    public function addtional_information()
    {
        return $this->hasOne(AdditionalInformation::class,'student_id','student_id_number');
    }
    public function educational_information(){
        return $this->hasOne(EducationalInformation::class,'student_id','student_id_number')->with('department');
    }

   


    public function graduate()
    {
        return $this->hasOne(Graduate::class,'student_id','student_id_number');
    }
    public function image()
    {
        return $this->hasOne(Image::class,'student_id','student_id_number');
    }


    public function student_relatives()
    {
        return $this->hasOne(StudentRelative::class,'student_id','student_id_number');
    }

    public function study_information(){
        return $this->hasOne(StudyInformation::class,'student_id','student_id_number');
    }








}
