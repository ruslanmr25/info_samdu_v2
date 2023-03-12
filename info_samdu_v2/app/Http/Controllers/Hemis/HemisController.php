<?php

namespace App\Http\Controllers\Hemis;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HemisController extends Controller
{


    public function show($student)
    {
        $HEMIS_URL = config('app.HEMIS_URL');
        $HEMIS_TOKEN = config('app.HEMIS_TOKEN');

        $url = $HEMIS_URL . "data/student-list?search=" . $student;

    


        $request = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $HEMIS_TOKEN
        ])->get($url);





        return json_decode($request);
    }
    public function image($student)
    {
        $image = Image::where('student_id', $student)->firstOrFail();
        $image_path = $image->ImagePath;
        $image = Http::get($image_path);

        return response()->json([

            'data' => [
                'success' => true,
                'image' => base64_encode($image)
            ]
        ]);
    }


    public function curriculum_list(Request $request)
    {


        # https://student.samdu.uz/rest/v1/data/curriculum-list?_department=${findStore.educational_information.department_id}



        $HEMIS_URL = config('app.HEMIS_URL');
        $HEMIS_TOKEN = config('app.HEMIS_TOKEN');

        $url = $HEMIS_URL . "data/curriculum-list?_department=" . $request->_department;


        $request = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $HEMIS_TOKEN
        ])->get($url);





        return json_decode($request);
    }

    public function group_list(Request $request)
    {


        # https://student.samdu.uz/rest/v1/data/group-list?_curriculum=${findStore.educational_information.specality}



        $HEMIS_URL = config('app.HEMIS_URL');
        $HEMIS_TOKEN = config('app.HEMIS_TOKEN');

        $url = $HEMIS_URL . "data/group-list?_curriculum=" . $request->_curriculum;


        $request = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $HEMIS_TOKEN
        ])->get($url);





        return json_decode($request);
    }
    public function department_list(Request $request)
    {


        # https://student.samdu.uz/rest/v1/data/department-list?limit=30&_structure_type=11



        $HEMIS_URL = config('app.HEMIS_URL');
        $HEMIS_TOKEN = config('app.HEMIS_TOKEN');

        $url = $HEMIS_URL . "data/department-list?limit=30&_structure_type=11" ;


        $request = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $HEMIS_TOKEN
        ])->get($url);





        return json_decode($request);
    }



}
