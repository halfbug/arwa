<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipt;
use App\Client;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$receipt=receipt::all();
	return view('receipt.index', compact('receipt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('receipt.create', compact('clients'));
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
            //'trader_id' => 'required',
            'date' => 'required',
            'receipt_no' => 'required',
            'total_amount' => 'required',
        ]);
        $rec = $request->all();
        $date=date_create($rec['date']);
        $format = date_format($date,"Y-m-d");
        $rec['date'] = strtotime($format);
		
		$dateGD_date=date_create($rec['printed_on']);
        $format1 = date_format($dateGD_date,"Y-m-d");
        $rec['printed_on'] = strtotime($format1);

        receipt::create($rec);


        return redirect()->route('receipt.index')
            ->with('success','receipt has been created successfully.');
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
    public function destroy(Receipt $receipt)
    {
        $receipt->delete();


        return redirect()->route('receipt.index')
            ->with('success','receipt Record deleted successfully');
    }
}
