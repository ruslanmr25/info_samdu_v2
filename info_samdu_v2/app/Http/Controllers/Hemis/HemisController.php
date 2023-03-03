<?php

namespace App\Http\Controllers\Hemis;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HemisController extends Controller
{


    public function show($student)
    {   $HEMIS_URL=config('app.HEMIS_URL');
        $HEMIS_TOKEN=config('app.HEMIS_TOKEN');

        $url=$HEMIS_URL."/student-list?search=".$student;


        $request=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer '.$HEMIS_TOKEN
        ])->get($url);


        


        return json_decode($request);

    }
    public function image($student)
    {
        $image=Image::where('student_id',$student)->firstOrFail();
        $image_path=$image->ImagePath;
        $image=Http::get($image_path);

        return response()->json([

            'data'=>[
                'success'=>true,
                'image'=>base64_encode( $image)
            ]
            ]);

    }



}
