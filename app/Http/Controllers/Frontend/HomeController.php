<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $path = 'frontend.';
    public function index(){
         return view($this->path . 'home');
    }

    public function taxForm(){
          $taxTypes = config('tax');
         return view($this->path . 'tax_form', ['taxTypes' => $taxTypes]);
    }
}
