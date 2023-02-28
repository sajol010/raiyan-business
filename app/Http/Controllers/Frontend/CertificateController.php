<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Certificate;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Tax;
use Illuminate\Http\Request;
use UnionCouncil;

class CertificateController extends Controller
{
    private $path = 'frontend.certificate.';

    public function create(Request $request){
        $medium = $request->mediumtype??2;
        return view($this->path. 'create', ['medium' => $medium]);
    }

    public function store(Request $request){

        $input = $request->all();
        Certificate::create($input);

        return back();
    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $cartJson = json_decode(json_decode($request->cart_json, true), true);
       $request = new Request($cartJson);
        $certifcate = Certificate::create($request);
        $cartJson['email'] = "blackheartboy010@gmail.com";

        $post_data = array();
        $post_data['total_amount'] = env("PAYMENT_AMOUNT"); # You cant not pay less than 10
        $post_data['currency'] = env('CURRENCY', "BDT");
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = !empty($cartJson['e_name'])?$cartJson['e_name']:$cartJson['b_name'];
        $post_data['cus_add1'] = $cartJson['address_line1']??'';
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = !empty($cartJson['e_phone'])?$cartJson['e_phone']:$cartJson['b_phone'];
        $post_data['cus_email'] = $cartJson['email'];

        # SHIPMENT INFORMATION
//        $post_data['ship_name'] = "Store Test";
//        $post_data['ship_add1'] = "Dhaka";
//        $post_data['ship_add2'] = "Dhaka";
//        $post_data['ship_city'] = "Dhaka";
//        $post_data['ship_state'] = "Dhaka";
//        $post_data['ship_postcode'] = "1000";
//        $post_data['ship_phone'] = "";
//        $post_data['ship_country'] = "Bangladesh";
//
//        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = $cartJson['product_name'];
        $post_data['product_category'] = $cartJson['product_category'];
        $post_data['shipping_method'] = "NO";
        $post_data['product_profile'] = "non-physical-goods";

        # OPTIONAL PARAMETERS
//        $post_data['value_a'] = "ref001";
//        $post_data['value_b'] = "ref002";
//        $post_data['value_c'] = "ref003";
//        $post_data['value_d'] = "ref004";

        $payment = new Payment();
        $payment->type = !empty($cartJson['product_category']) && $cartJson['product_category'] == 'tax' ? 1 : 2;
        $payment->union_id = UnionCouncil::getId();
        $payment->amount = $post_data['total_amount'];
        $payment->gateway_id = '';
        $payment->content_id = $certifcate->id;
        $payment->transaction_id = $post_data['tran_id'];
        $payment->currency = $post_data['currency'];
        $payment->save();


        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function searchCertificate(){
        return view($this->path. 'search');
    }

    public function getOTP(){
        return view($this->path. 'otp');
    }
}
