<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user=Auth::attempt(['name'=>$request->name,'password'=>$request->password]);

        if($user){

            return $next($request);
        }
        else{
            return response()->json([
                'data'=>[
                    'success'=>false,
                    'message'=>'This user not found'
                ]
                ],403);
    }
}

}
