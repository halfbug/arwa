<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commercial_invoice;
use App\Client;

class CommercialinvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comm_invoice = Commercial_invoice::all();
        return view('invoice.index',compact('comm_invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('invoice.createCommercialInvoice', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mycommercialinvoice = $request->all();
        $date=date_create($mycommercialinvoice['invoice_date']);
        $format = date_format($date,"Y-m-d");
        $mycommercialinvoice['invoice_date'] = strtotime($format);
        $date1=date_create($mycommercialinvoice['S/C_NC_date']);
        $format1 = date_format($date1,"Y-m-d");
        $mycommercialinvoice['S/C_NC_date'] = strtotime($format1);
        Commercial_invoice::create($mycommercialinvoice);
        return redirect()->route('invoice.index')
            ->with('success','Commercial Invoice has been added successfully.');
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
    public function destroy(Commercial_invoice $cominv)
    {
        $cominv->delete();


        return redirect()->route('invoice.index')
            ->with('success','invoice deleted successfully');
    }
}
