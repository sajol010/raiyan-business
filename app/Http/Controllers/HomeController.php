<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function taxForm(){
        return view('frontend.tax_form');
    }
}
