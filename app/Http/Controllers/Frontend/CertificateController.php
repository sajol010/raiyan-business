<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    private $path = 'frontend.certificate.';

    public function create(Request $request){
        $medium = $request->mediumtype;
        return view($this->path. 'create', ['medium' => $medium]);
    }

    public function store(Request $request){
        
        $input = $request->all();
        Certificate::create($input);

        return back();
    }

    public function searchCertificate(){
        return view($this->path. 'search');
    }

    public function getOTP(){
        return view($this->path. 'otp');
    }
}
