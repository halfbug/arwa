<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesTax;
use App\Client;

class SalesTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $salesTaxes = SalesTax::all();


            return view('salesTax.index',compact('salesTaxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients= Client::all();
            return view('salesTax.create',compact('clients'));
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
            'value' => 'required|numeric',
            'client_id' => 'required',
            'date' => 'required',
        ],[

        'value.required' => 'Tax value is required',
            'value.numeric' => 'Tax value must be a number',



        ]);

        $tax = $request->all();
        $date=date_create($tax['date']);
        $format = date_format($date,"Y-m-d");
        $tax['date'] = strtotime($format);
        SalesTax::create($tax);


        return redirect()->route('sales-tax.index')
            ->with('success','Sales Tax  has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SalesTax $salesTax)
    {
        return view('salesTax.show',compact('salesTax'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesTax $salesTax)
    {
        return view('salesTax.edit',compact('salesTax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesTax $salesTax)
    {
        request()->validate([
            'value' => 'required',
            'client_id' => 'required',
            'date' => 'required',
        ]);


        $salesTax->update($request->all());


        return redirect()->route('sales-tax.index')
            ->with('success','Sales Tax updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesTax $salesTax)
    {
        $salesTax->delete();


        return redirect()->route('sales-tax.index')
            ->with('success','Tax deleted successfully');

    }
}
