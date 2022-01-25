<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //ADD 06182021

    public function index()
    {
        return view('welcome');//Copied Original From routes\web.php
        
    }


    
}
