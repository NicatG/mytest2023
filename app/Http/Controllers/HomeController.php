<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){

        return view('homePage');
    }


    public function nicat(){

        return view('test');
    }
}
