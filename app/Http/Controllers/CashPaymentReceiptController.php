<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CashPaymentReceipt;
use App\Client;

class CashPaymentReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$receipt=CashPaymentReceipt::all();
	return view('cashreceipt.index',compact('receipt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('cashreceipt.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'date' => 'required',
            'cash_no' => 'required',
            'total_amount' => 'required',
            'agent_name' => 'required',
        ]);
        $rec = $request->all();
        $date=date_create($rec['date']);
        $format = date_format($date,"Y-m-d");
        $rec['date'] = strtotime($format);
		
        CashPaymentReceipt::create($rec);


        return redirect()->route('cashreceipt.index')
            ->with('success','cash payment receipt has been created successfully.');
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
    public function destroy(CashPaymentReceipt $cashre)
    {
        $cashre->delete();
        return redirect()->route('cashreceipt.index')
            ->with('success','cash payment receipt Record deleted successfully');
    }
}
