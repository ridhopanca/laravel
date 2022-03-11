<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() 
    {
      $name = request('name');
      return view('home', compact('name'));
    }
}
