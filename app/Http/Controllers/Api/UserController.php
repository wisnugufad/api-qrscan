<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function list()
    {
        try {
            $this->check_token($this->check);
            return User::all();
        } catch (\Exception $e) {
            return response()->json(['status'=>'error','message' => $e->getMessage()], 401);
        }     
    }

    public function name($name)
    {
        try {
            // $this->check_token($this->check);
            return User::where('name',$name)->first(); 
            // return strval($name);
        } catch (\Exception $e) {
            return response()->json(['status'=>'error','message' => $e->getMessage()], 401);
        }     
    }
}
