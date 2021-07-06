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

    function register()
    {
        return view('register');
    }


}



