<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
     public function donate(){
        return view('donate');
    }
    public function aboutus(){
        return view('about');
    }
    public function program(){
        return view('programs');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function impact(){
        return view('impact');
    }
     public function gallery(){
        return view('gallery');
    }
    public function involved(){
        return view('getinvolved');
    }
    public function transparency(){
        return view('transparency');
    }

}
