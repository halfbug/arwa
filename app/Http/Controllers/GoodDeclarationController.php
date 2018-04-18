<?php

namespace App\Http\Controllers;

use App\GoodDeclaration;
use Illuminate\Http\Request;
use App\Client;
use App\Challan;

class GoodDeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$goods=GoodDeclaration::all();
	return view('goods.index',compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $challan = Challan::all();
        return view('goods.create', compact('clients','challan'));
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
            'consignor_id' => 'required',
            'challan_id' => 'required',
        ]);
        $rec = $request->all();
        $igm_egm_date=date_create($rec['igm_egm_date']);
        $format1 = date_format($igm_egm_date,"Y-m-d");
        $rec['igm_egm_date'] = strtotime($format1);
        $date1=date_create($rec['dry_port_igm_egm_date']);
        $format2 = date_format($date1,"Y-m-d");
        $rec['dry_port_igm_egm_date'] = strtotime($format2);
		
        GoodDeclaration::create($rec);


        return redirect()->route('goods.index')
            ->with('success','GD created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoodDeclaration  $goodDeclaration
     * @return \Illuminate\Http\Response
     */
    public function show(GoodDeclaration $goodDeclaration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoodDeclaration  $goodDeclaration
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodDeclaration $goodDeclaration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoodDeclaration  $goodDeclaration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodDeclaration $goodDeclaration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoodDeclaration  $goodDeclaration
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodDeclaration $goodDeclaration)
    {
        $goodDeclaration->delete();
        return redirect()->route('goods.index')
            ->with('success','GD deleted successfully');
    }
}
