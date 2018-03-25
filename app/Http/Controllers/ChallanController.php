<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challan;
use App\Client;

class ChallanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challan = Challan::all();


        return view('challan.index',compact('challan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('challan.create', compact('clients'));
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
            'challan_no' => 'required',
            'total_amount' => 'required',
        ]);
        $chall = $request->all();
        $date=date_create($chall['date']);
        $format = date_format($date,"Y-m-d");
        $chall['date'] = strtotime($format);
		
		$dateGD_date=date_create($chall['GD_date']);
        $format1 = date_format($dateGD_date,"Y-m-d");
        $chall['GD_date'] = strtotime($format1);

		$date2=date_create($chall['payment_date']);
        $format2 = date_format($date2,"Y-m-d");
        $chall['payment_date'] = strtotime($format2);

        Challan::create($chall);


        return redirect()->route('challan.index')
            ->with('success','challan has been added successfully.');
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
    public function edit(Challan $challan)
    {
        $clients = Client::all();
        return view('challan.edit', compact('challan','clients'));
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
