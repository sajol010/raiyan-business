<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    private $path = 'frontend.certificate.';

    public function create(){
        return view($this->path. 'create');
    }

    public function searchCertificate(){
        return view($this->path. 'search');
    }

    public function getOTP(){
        return view($this->path. 'otp');
    }
}
