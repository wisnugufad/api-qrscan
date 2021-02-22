<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $redirectPath = '/home';

    public function __construct()
    {
        parent::__construct();
        $this->token = Cookie::get('token');
        $this->redirect = route('home');
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );
        $api = Request::create('/api/login','POST', $data);
        $result = json_decode(app()->handle($api)->getContent());
        $this->setCookie($result->access_token);
        return redirect()->intended($this->redirect);
    }
}
