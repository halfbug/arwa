<?php

namespace App\Http\Controllers;

use App\ImportInvoice;
use Illuminate\Http\Request;
use App\Client;

class ImportInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$impinv=ImportInvoice::all();
	return view('importinvoice.index',compact('impinv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('importinvoice.create', compact('clients'));
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
            'totalinvoiceamount' => 'required',
            'invoice_no' => 'required',
            'invoice_date' => 'required',
        ]);
        $rec = $request->all();
        $date=date_create($rec['invoice_date']);
        $format = date_format($date,"Y-m-d");
        $rec['invoice_date'] = strtotime($format);
        $date2=date_create($rec['receiptdt']);
        $format2 = date_format($date2,"Y-m-d");
        $rec['receiptdt'] = strtotime($format2);
		
        ImportInvoice::create($rec);
        return redirect()->route('importinvoice.index')
            ->with('success','importinvoice added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImportInvoice  $importInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(ImportInvoice $importInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImportInvoice  $importInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportInvoice $importInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImportInvoice  $importInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportInvoice $importInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportInvoice  $importInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImportInvoice $importInvoice)
    {
        $importInvoice->delete();
        return redirect()->route('importinvoice.index')
            ->with('success','Import Invoice deleted successfully');
    }
}
