<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function process(Request $request)
    {
        $username = $request->input('username');
        $pass = $request->input('pass');
        $session_array = array(
            'login' => true,
            'username' => $username
        );
        Session::put($session_array);
        return redirect('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
