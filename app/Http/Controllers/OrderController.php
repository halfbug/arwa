<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\InfoOfContainer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();


        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
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
            'shipper' => 'required',
            'consignee' => 'required',
            'notify_party' => 'required',
            'date' => 'required',
            'goods_description' => 'required'
        ]);

//        $tax = $request->all();
		$inputorder = $request->except('freight_charges','rev_terms','rate','per','amount','prepaid','collect','f_c_payable_by');
        $date=date_create($inputorder['date']);
        $format = date_format($date,"Y-m-d");
        $inputorder['date'] = strtotime($format);
        $newOrder=Order::create($inputorder);

		$total=$request->contacts;

		if($total>1){
		for( $i = 2; $i <= $total; $i++ ) {
/* 		$this_contact = array(
        'freight_charges'  => $request['freight_charges-' . $i],
        'rev_terms' => $request['rev_terms-' . $i],
        'rate' => $request['rate-' . $i],
        'per' => $request['per-' . $i],
        'amount' => $request['amount-' . $i],
        'prepaid' => $request['prepaid-' . $i],
        'collect' => $request['collect-' . $i],
        'f_c_payable_by' => $request['f_c_payable_by-' . $i]
    );
 */		
		$arrinput = $request->only('freight_charges-'.$i,'rev_terms-'.$i,'rate-'.$i,'per-'.$i,'amount-'.$i,'prepaid-'.$i,'collect-'.$i,'f_c_payable_by-'.$i);
		$arr['freight_charges']=$arrinput['freight_charges-'.$i];
		$arr['rev_terms']=$arrinput['rev_terms-'.$i];
		$arr['rate']=$arrinput['rate-'.$i];
		$arr['per']=$arrinput['per-'.$i];
		$arr['amount']=$arrinput['amount-'.$i];
		$arr['prepaid']=$arrinput['prepaid-'.$i];
		$arr['collect']=$arrinput['collect-'.$i];
		$arr['f_c_payable_by']=$arrinput['f_c_payable_by-'.$i];

		$arr['order_id']=$newOrder->id;
        InfoOfContainer::create($arr);
	}
	}//if
		
		$inputcontainerinfo = $request->only('freight_charges','rev_terms','rate','per','amount','prepaid','collect','f_c_payable_by');
		$inputcontainerinfo['order_id']=$newOrder->id;
        InfoOfContainer::create($inputcontainerinfo);


        return redirect()->route('order.index')
            ->with('success','Sales Order has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.preview', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
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
