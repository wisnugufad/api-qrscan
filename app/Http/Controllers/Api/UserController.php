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
}
