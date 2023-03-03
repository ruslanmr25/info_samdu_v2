<?php

namespace App\Http\Controllers;

use App\Models\EducationalInformation;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class Search extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // $search_educ=$request->eductional_information;
        $sear_student=$request->student;

        return $request->all();



        
        $query=EducationalInformation::query();


        $condition=[];
        if($request->department){
             $condition['department_id']=$request->department;
        }

        if($request->specialty){
            $condition['specialty']=$request->specialty;
        }

        if($request->level){
            $condition['level']=$request->level;
        }

        if($request->paymentForm){
            $condition['paymentForm']=$request->paymentForm;
        }
        if($request->group){
            $condition['group']=$request->group;
        }



        foreach($condition as $key=>$value){
            $query->where($key,'LIKE','%'.$value.'%');



        }
        $students=$query->get();

        return $students;






    }
}
