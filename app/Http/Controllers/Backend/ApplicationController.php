<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function approve($id){
        $application = Certificate::find($id);
        $application->status = 1;
        $application->save();
        return back();
    }
}
