<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): Response
    {
        //
    }
}
