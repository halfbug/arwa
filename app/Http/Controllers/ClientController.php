<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customers()
    {
        $customers = Client::all()->where('type',"Customer");
        return view("customers")->with('customers',$customers);

    }

    public function vendors()
    {
        $vendors = Client::all()->where('type',"Vendor");
        return view("vendors")->with('vendors',$vendors);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input = request()->validate([

            'first_name' => 'required',
            'company_name' => 'required',



        ], [

            'first_name.required' => 'Name is required',
            'company_name.required' => 'Company Name is required',



        ]);



        $input = request()->all();

        $input["status"] = true;
        if($request->hasfile('company_docs'))
        {
            $file = $request->file('company_docs');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/document/', $name);
            $input["company_docs"] = $name;
        }

        $client = Client::create($input);



//        return back()->with('success', 'Customer created successfully.');

        return redirect(strtolower($client->type."s"))->with('success', $client->type.' has been created successfully.');

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
    public function edit(Client $client)
    {
        return view('editClient',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate([
            'first_name' => 'required',
            'company_name' => 'required',
        ]);


        $client->update($request->all());

$rout="/".$client->type."s";
        return redirect(strtolower($rout))
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return back()->with('success', $client->type . ' has been deleted successfully.');
    }

    /**
     * Show the application dataAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataAjax(Request $request)
    {
        $data = [];

//        dd($request->all());
        if($request->has('q')){
            $search = $request->q;
            $data = \DB::table("clients")
                ->select("id","company_name")
                ->where('company_name','LIKE',"%$search%")
                ->get();
        }


        return response()->json($data);
    }
}
