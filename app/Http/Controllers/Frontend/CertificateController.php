<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function download(Request $request){
        $citizen = Certificate::where('b_nid', $request->nid)->orWhere('e_nid', $request->nid)->first();
        $data = [
            'citizen' => $citizen
        ];
        $pdf = Pdf::loadView('pdf.english.nagorik_sonod', $data);
        return $pdf->download('certificate.pdf');
    }
}
