<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;
use Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $check;
    public function __construct()
    {
        Auth::setDefaultDriver('api');
        $user = $this->isLogin();
        $this->check = $user->original['status'];
    }

    public function isLogin()
    {
        try {
            Auth::userOrFail();
            return response()->json(['status'=>'success'], 200);
        } catch (UserNotDefinedException $e) {
            return response()->json(['status'=>'error'], 401);
        }
    }

    public function check_token($token)
    {
        if ($token =='error') {
            Throw new Exception('Unautorized');
        }
    }

    public function get_token_info()
    {
        try {
            // attempt to verify the credentials and create a token for the user
            $token = Auth::getToken();
            $user = Auth::getPayload($token)->toArray();
            return $user;
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], 500);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], 500);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent' => $e->getMessage()], 500);
        }
    }
}
