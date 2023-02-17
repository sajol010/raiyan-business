<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public static function add($request){

        if (empty($request->phone) && empty($request->nid)){
            return ['status'=>false, 'msg'=>'Phone number or nid number is required'];
        }
        $customer = Customer::where('phone', $request->phone)->orWhere('nid', $request->nid)->first();
        if (empty($customer))
            $customer = new Customer();

        if (isset($request->first_name)) $customer->first_name = $request->first_name;
        if (isset($request->last_name)) $customer->last_name = $request->last_name;
        if (isset($request->phone)) $customer->phone = $request->phone;
        if (isset($request->nid)) $customer->nid = $request->nid;
        if (isset($request->nid)) $customer->address_line1 = $request->address_line1;
        if (isset($request->address_line2)) $customer->address_line2 = $request->address_line2;
        if (isset($request->email)) $customer->email = $request->email;
        if (isset($request->password)) $customer->password = $request->password;
        if (isset($request->otp)) $customer->otp = $request->otp;

        if ($customer->save()){
            return ['status'=>true, 'customer'=>$customer];
        }
        return ['status'=>false, 'msg'=>'Something Wrong'];
    }
}
