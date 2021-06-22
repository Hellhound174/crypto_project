<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use Validater;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('login');
    }


    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphanum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('main/succeslogin');
        } else {
            return back()->with('error', 'wrong login details');
        }

        function logout()
        {
            Auth::logout();
            return redirect('main');
        }
    }


}



