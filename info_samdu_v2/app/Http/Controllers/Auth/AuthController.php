<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $password = Hash::make($request->password);
        $request['password'] = $password;
        $user=User::create($request->all());


        return response()->json([
            'success'=>true,
            'message'=>'User create successfully'
        ]);


    }

    public function login(Request $request)
    {
        $user=Auth::user();






        $token=$user->createToken($user->name)->plainTextToken;

        return response([
            'data'=>[
                'success'=>true,
                'token'=>$token
            ]
        ]);
    }

    public function test1(Request $request)
    {

        return $request->cookie('user');



    }

}
