<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Http\Requests\UpdateStudentRequest;
use App\Models\Accommodation;
use App\Models\Achievements;
use App\Models\AdditionalInformation;
use App\Models\Graduate;
use App\Models\Image;
use App\Models\StudentRelative;
use App\Models\StudyInformation;
use Illuminate\Http\Request;
use PhpParser\Node\Name\Relative;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('accomodations')
        ->with('achievement')
        ->with('addtional_information')
        ->with('educational_information')
        ->with('graduate')
        ->with('image')
        ->with('student_relatives')
        ->with('study_information')

        ->paginate(25);

        return $students;

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
        $rstudent = (array) json_decode($request->student);
        $student = Student::create($rstudent);


        $r_educational_information = (array) json_decode($request->educational_information);
        $r_educational_information['student_id'] = $student->student_id_number;
        $student->educational_information()->create($r_educational_information);
        if ($request->images) {
            $image = $request->file('images');
            $image_path = $image->store('images/users');
        } else {
            $image_path = $rstudent['image'];
        }

        $student->image()->create([
            'student_id' => $student->student_id_number,
            'ImagePath' => $image_path
        ]);



        return response([
            'data' => [
                'success' => true,
                'message' => 'User create successfully'
            ]
        ]);
    }

    public function create_study_information(Request $request)
    {

        $student_id = $request->student_id_number;
        $r_study_information = (array) json_decode($request->study_information);
        $r_study_information['student_id'] = $student_id;

        StudyInformation::create($r_study_information);

        return response()->json([
            'data' => [
                'success' => true
            ]
        ]);
    }

    public function create_place_of_residence(Request $request)
    {

        $student_id=$request->student_id_number;


        $accomodiation=(array) json_decode($request->accommodation);





        $accomodiation['student_id']=$student_id;


        $achievements=(array) json_decode($request->achievements);
        $achievements['student_id']=$student_id;
        $additional_information=(array) json_decode($request->additional_information);
        $additional_information['student_id']=$student_id;
        $graduate=(array) json_decode($request->graduate);
        $graduate['student_id']=$student_id;




        $accomodiation=Accommodation::create($accomodiation);
        $achievements=Achievements::create($achievements);


        $additional_information=AdditionalInformation::create($additional_information);
        $graduate=Graduate::create($graduate);

        return response()->json([
            'data'=>[
                'success'=>true
            ]
            ]);

    }


    public function relatives (Request $request)
    {
        $student_id=$request->student_id_number;


        $relatives=(array) json_decode($request->relatives);





        $relatives['student_id']=$student_id;

        StudentRelative::create($relatives);

        return response()->json([
            'data'=>[
                'success'=>true
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
