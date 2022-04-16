<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homePage() 
    {
        return view('home');
    }
    
    public function why()
    {
        return view('why');
    }

}
