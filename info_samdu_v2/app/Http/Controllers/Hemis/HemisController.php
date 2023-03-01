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
