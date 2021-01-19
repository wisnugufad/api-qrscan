<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
        $creds = $request->only(['email','password']);
        $user = User::where('email',$request->email)->first()->toArray();
        if(!$token = Auth::claims($user)->attempt($creds)){
            return response()->json(['error' => 'incorect email / password'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ]);
    }
}
