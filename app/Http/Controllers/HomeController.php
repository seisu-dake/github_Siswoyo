<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function Contact(){
        return view("contact0078");
    }
    public function Artikel(){
        return view("artikel0078");
    }
}
