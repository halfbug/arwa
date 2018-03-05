<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ioperation;

class IoperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ioperations = Ioperation::all();


        return view('ioperation.index',compact('ioperations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ioperation.create');
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
            'amount' => 'required|numeric',
            'items' => 'required',
            'date' => 'required',
        ],[

            'amount.required' => 'total amount spent is required',
            'amount.numeric' => ' total amount must be a number',



        ]);

        $tax = $request->all();
        $date=date_create($tax['date']);
        $format = date_format($date,"Y-m-d");
        $tax['date'] = strtotime($format);
        Ioperation::create($tax);


        return redirect()->route('ioperation.index')
            ->with('success','Items has been added successfully.');
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
    public function destroy(Ioperation $ioperation)
    {
        $ioperation->delete();


        return redirect()->route('ioperation.index')
            ->with('success','Items deleted successfully');
    }
}
