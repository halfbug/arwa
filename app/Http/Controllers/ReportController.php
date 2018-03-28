<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Client;
use App\Commercial_invoice;
class ReportController extends Controller
{
    //
	public function index(){
		return view('report.index');
	}
	public function commercial_invoices(){
		//$order=Client::all();
		$com_invoice=Commercial_invoice::all();
		return view('report.commercial_invoice',compact('com_invoice'));
	}
}
