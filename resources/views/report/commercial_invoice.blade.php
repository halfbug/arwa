@extends('layouts.admin')

@section('content')
    <div class="col-md-12"> <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
    <div class="row color-invoice" id="printableArea" >
        <div class="row " style="background:#efefef;" >
            <div class="col-xs-6 col-md-4" >
                <p><br>
                    Invoice.No: <strong>{{-- $invoice->id --}}{{--str_pad( $order->id, 7, "0", STR_PAD_LEFT )--}}</strong>
                    <br>
                    <i class="fa fa-envelope-o"></i> <strong> arwainternational@gmail.com</strong>
                    <br />
                    <i class="fa fa-phone"></i> <strong>92-21-32472480</strong>
                    <i class="fa fa-fax"></i> 92-21-32472316
<br>
                    <i class=" fa fa-map-marker "></i> OFFICE # 914, 9 TH FLOOR
                        JILANI TOWER,<br>M.A JINNAH ROAD
                        KARACHI PAKISTAN
    
            </p>
			</div>
            <div class="col-xs-6 col-md-4">
                <img src="{{url('images/Logo 2.png')}}"  width="100%" height="100%"/></div>
            <div class="col-xs-6 col-md-4 "> <h3 class="pull-right">Commercial Invoice Report</h3></div>
		</div>

		    <div class="row">
				        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Invoice From</th>
                            <th>Invoice Date</th>
                            <th>Invoice#</th>
                            <th>S/C_NC</th>
                            <th>S/C_NC Date</th>
                            <th>B/L_no</th>
                            <th>countryoforigin</th>
                            <th>container_no</th>
                            <th>HScode</th>
                            <th>goods_description</th>
                            <th>goods_qty</th>
                            <th>goods_unit_price</th>
                            <th>amount</th>
                       </tr>
                        </thead>
                        <tbody>
                        @foreach ($com_invoice as $invoice)
							<tr class="odd gradeX">
                                <td>{{ucfirst($invoice->client->company_name)}} {{$invoice->client->first_name}} &nbsp; {{$invoice->client->last_name}}</td>
                                <td>{{date('Y-m-d',$invoice->invoice_date)}}</td>
                                <td>{{$invoice->invoice_no}}</td>
                                <td class="center">{{--$invoice->S/C_NC--}}</td>
                                <td>{{--$invoice->S/C_NC_date--}}</td>
                                <td>{{--$invoice->B/L_no--}}</td>
                                <td>{{$invoice->countryoforigin}}</td>
                                <td>{{$invoice->container_no}}</td>
                                <td>{{$invoice->HScode}}</td>
                                <td>{{$invoice->goods_description}}</td>
                                <td>{{$invoice->goods_qty}}</td>
                                <td>{{$invoice->goods_unit_price}}</td>
                                <td>{{$invoice->amount}}</td>
                                <td class="center">
                                    {{--<a href="tables.html"><i class="fa fa-file fa-fw"></i> </a>--}}
                                    {{--<a href="tables.html"><i class="fa fa-edit fa-fw"></i> </a>--}}
                                    {{--<a href="tables.html"><i class="fa fa-trash-o fa-fw"></i> </a>--}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
	
            </div>
	</div>

	@endsection

@section('script')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection