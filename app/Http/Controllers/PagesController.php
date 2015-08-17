<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }


     public function about()
    {
        return 'About Page';
    }

}
