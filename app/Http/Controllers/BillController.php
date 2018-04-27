<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Client;
use App\Challan;
use App\GoodDeclaration;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$bill=Bill::all();
	return view('bill.index',compact('bill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $gds=GoodDeclaration::all();
        $clients = Client::all();
        $challan = Challan::all();
        return view('bill.create', compact('clients','challan','gds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         request()->validate([
            'date' => 'required'
//            'bill_no' => 'required',
//            'total_bill_amount' => 'required',
        ]);
 */        $rec = $request->all();
        $date=date_create($rec['date']);
        $format = date_format($date,"Y-m-d");
        $rec['date'] = strtotime($format);
        $date1=date_create($rec['arr_date']);
        $format1 = date_format($date1,"Y-m-d");
        $rec['arr_date'] = strtotime($format1);
        //$rec['gd_id'] = 1;
		
        Bill::create($rec);


        return redirect()->route('bill.index')
            ->with('success','bill has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        return view('bill.preview',compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        return view('bill.edit',compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
		$rec=$request->all();
        $date=date_create($rec['date']);
        $format = date_format($date,"Y-m-d");
        $rec['date'] = strtotime($format);
        $date1=date_create($rec['arr_date']);
        $format1 = date_format($date1,"Y-m-d");
        $rec['arr_date'] = strtotime($format1);
        $bill->update($rec);
        return back()->with('success bill updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return redirect()->route('bill.index')
            ->with('success','bill deleted successfully');
    }
}
