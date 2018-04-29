<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ContainerServiceCharges;
class ContainerServiceChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$csc=ContainerServiceCharges::all();
	return view('csc.index', compact('csc'));    
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$clients=Client::all();
	return view('csc.create', compact('clients'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = $request->all();
        $date=date_create($rec['arr_date']);
        $format = date_format($date,"Y-m-d");
        $rec['arr_date'] = strtotime($format);
        $date1=date_create($rec['gate_in']);
        $format1 = date_format($date1,"Y-m-d");
        $rec['gate_in'] = strtotime($format1);
        $date2=date_create($rec['gate_out']);
        $format2 = date_format($date2,"Y-m-d");
        $rec['gate_out'] = strtotime($format2);
		
        ContainerServiceCharges::create($rec);


        return redirect()->route('csc.index')
            ->with('success','ContainerServiceCharges has been added successfully.');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContainerServiceCharges $csc)
    {
	return view('csc.preview', compact('csc'));    
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
