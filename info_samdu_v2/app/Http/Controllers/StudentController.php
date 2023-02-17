<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Http\Requests\UpdateStudentRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return response()->json([
            'data' => [
                'success' => true,
                'students' => $students
            ]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //studentni ushlash

        
        $rstudent =(array) json_decode( $request->student);
        $student=Student::create($rstudent);


        if($request->study_information){

            $r_study_information=(array) json_decode($request->study_information);
            $r_study_information['students_id']=$student->id;
            $student->study_information()->create($r_study_information);
        }

        $r_educational_information=(array) json_decode($request->educational_information);


        $r_educational_information['students_id']=$student->id;
        $student->educational_information()->create($r_educational_information);




        if ($request->images) {
            $image = $request->file('images');
            $image_path = $image->store('images/users');
        }else{
            $image_path=$rstudent['image'];
        }

        $student->image()->create([
            'students_id'=>$student->id,
            'ImagePath'=>$image_path
        ]);



        return response([
            'data'=>[
                'success'=>true,
                'message'=>'User create successfully'
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
