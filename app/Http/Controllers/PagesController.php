<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
        //return view('welcome');
    }
    public function FuncFromAnyData()
    {   
        $title = "Static Value From Variable";
        return ( $title);
    }    
    public function FuncFromAnyData_To_View()
    {   
        $fromPagesController = "First Variable From PagesController";
        $fromPagesController2 = "Second Variable From PagesController";
        return view('pages.about',compact('fromPagesController','fromPagesController2'));
    }  
    public function usersinfo($id,$company)
    {
        $passParam = "Welcome: ".$id.", Company Name: ".$company;
        return view('pages.users',compact('passParam'));
    }    
}
