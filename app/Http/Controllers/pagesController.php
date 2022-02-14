<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
      return view("Pages.home");
    }

    public function about(){
      return view("Pages.about");
    }

    public function services(){
      return view("Pages.services");
    }

    public function project(){
      return view("Pages.project");
    }

    public function blog(){
      return view("Pages.blog");
    }

    
    public function contact(){
      return view("Pages.contact");
    }
}
