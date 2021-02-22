<?php

namespace App\Http\Controllers;

// use Facade\FlareClient\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $data_view = array();
    private $token;

    public function __construct()
    {
        $this->token = Cookie::get('token');
    }

    public function index()
    {        
        $api = Request::create('/api/matakuliah','GET');
        $api->headers->set('Authorization', 'Bearer '.$this->token);
        $data_view['matakuliah'] = json_decode(app()->handle($api)->getContent());
        return view('index',$data_view);
    }

    public function setCookie($cookie)
    {
        setcookie('token', $cookie);
    }

    public function apiGet($url)
    {
        $api = Request::create($url,'GET');
        $api->headers->set('Authorization', 'Bearer '.$this->token);
        return json_decode(app()->handle($api)->getContent());
    }
}
