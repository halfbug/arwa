<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurrencyExchange;

class CurrencyExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencyExchange = CurrencyExchange::all();


        return view('currencyExchange.index',compact('currencyExchange'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('currencyExchange.create');
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
            'name' => 'required',
            'date' => 'required',
        ],[

            'value.required' => 'Rate is required',
            'value.numeric' => ' Rate must be a number',



        ]);

        $tax = $request->all();
        $date=date_create($tax['date']);
        $format = date_format($date,"Y-m-d");
        $tax['date'] = strtotime($format);
        CurrencyExchange::create($tax);


        return redirect()->route('currency-exchange.index')
            ->with('success','Rate  has been added successfully.');
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
    public function destroy(CurrencyExchange $currencyExchange)
    {
        $currencyExchange->delete();


        return redirect()->route('currency-exchange.index')
            ->with('success','Value deleted successfully');
    }
}
