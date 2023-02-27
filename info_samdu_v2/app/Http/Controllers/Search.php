<?php

namespace App\Http\Controllers;

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
        if ($request->student_id_number) {
            $students = Student::find($request->student_id_number);
        }
        if ($request->jshshir) {
            $students = Student::where('JSHSHIR', $request->jshshir)->get();
        }

        if ($request->passport) {
            $students = Student::where('passport', $request->passport)->get();
        }

        if ($request->nationality) {
            $students = Student::where('nationality', $request->nationality)->get();
        }

      

        return $students;
    }
}
