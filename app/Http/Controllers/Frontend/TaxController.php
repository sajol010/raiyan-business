<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use UnionCouncil;

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
        $taxTypes = config('tax');
        return view($this->path . 'create', ['taxTypes' => $taxTypes]);
    }

    /**
     * Check the status of the sent response.
     *
     * @return \Illuminate\Http\Response
     */
    public function taxVerify(Request $request){
        return view($this->path . 'verified');
    }

    /**
     * Redirect to view page.
     *
     * @return \Illuminate\Http\Response
     */
    public function taxVerifiedPage(){
        return view($this->path . 'verified');
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
        $customerUpdate = Customer::add($request);
        if (!$customerUpdate['status']) {
            return back()->withErrors($customerUpdate['msg']);
        }
        $customer = $customerUpdate['customer'];
        foreach ($request->taxes as $taxData) {
            $tax = new Tax();
            $tax->building_name = $taxData['building_name'];
            $tax->customer_id = $customer->id;
            $tax->union_id = UnionCouncil::getId();
            $tax->holding_no = $taxData['holding_no'];
            $tax->paying_year = $taxData['paying_year'];
            $tax->building_type = $taxData['building_type'];
            $tax->amount = $taxData['amount'];
            $tax->save();
        }

        return redirect()->back()->with('msg', __("tax.msg.saved.success"))->setStatusCode(201);
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
