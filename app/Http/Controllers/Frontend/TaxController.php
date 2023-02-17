<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TaxController extends Controller
{
    private $path = 'frontend.taxes.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'building_name'=>'required',
           'holding_no'=>'required',
           'paying_year'=>'required',
           'building_type'=>'required',
           'amount'=>'required',
        ]);
        $customerUpdate = Customer::add($request);
        if (!$customerUpdate['status']){
            return back()->withErrors($customerUpdate['msg']);
        }
        $customer = $customerUpdate['customer'];

        $tax = new Tax();
        $tax->building_name = $request->building_name;
        $tax->customer_id = $customer->id;
        $tax->holding_no = $request->holding_no;
        $tax->paying_year = $request->paying_year;
        $tax->building_type = $request->building_type;
        $tax->amount = $request->amount;
        if ($tax->save()){
            return redirect()->back()->with('msg',__("tax.msg.saved.success"))->setStatusCode(201);
        }

        return redirect()->back()->withErrors(__("tax.msg.unknown_error"))->setStatusCode(400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
