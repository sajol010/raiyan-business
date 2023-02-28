<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $path = 'frontend.';
    
    public function index(){
         return view($this->path . 'home');
        //  return view('pdf.bangla.nagorik_sonod');
    }
}
