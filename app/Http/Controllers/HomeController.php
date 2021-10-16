<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(!Session::has('login')){
                redirect()->route('login')->send();
            }else{
                return $next($request);
            }
        });
    }

    public function index()
    {
        return view('home');
    }
 
    public function tentang()
    {
        return view('tentang');
    }
 
    public function kontak()
    {
        return view('kontak');
    }
}
