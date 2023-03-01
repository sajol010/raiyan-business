<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Services\SmsService;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function approve($id){
        $application = Certificate::find($id);
        $application->status = 1;
        $this->sendSms($application);
        $application->save();




        return back();
    }

    public function sendSms($application){
        $mobileNumber = !empty($application['b_phone'])?$application['b_phone']:$application['e_phone'];
        if (empty($application)){
            return;
        }
        $sms = new SmsService();
        $sms->setTemplate("আপনার আবেদন অনুমোদিত হয়েছে");
        $sms->sendSms($mobileNumber);
    }

    public function reject($id){
        $application = Certificate::find($id);
        $application->status = 2;
        $application->save();
        return back();
    }

    public function destroy($id){
        $application = Certificate::find($id);
        $application->delete();
        return back();
    }
}
