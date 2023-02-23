<?php

namespace App\Http\Controllers\Dean;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeanController extends Controller
{
    public function tutors()
    {
        $user = Auth::user()->id;
        $tutors=User::where('creator',$user);
        return response()->json([
            'data'=>[
                'success'=>true,
                'tutors'=>$tutors
            ]
            ]);
    }
    
