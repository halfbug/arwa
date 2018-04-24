@extends('layouts.admin')

@section('content')
    <div class="col-md-12"> <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
    <div class="row color-invoice" id="printableArea" >
        <div class="row " style="background:#efefef;" >
            <div class="col-xs-6 col-md-4" >
                <p><br>
                    Total Agents {{ $totalagents }}<strong>{{-- $agent->id --}}{{--str_pad( $order->id, 7, "0", STR_PAD_LEFT )--}}</strong>
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
                <img src="{{url('images/Logo 2n.png')}}"  width="100%" height="100%"/></div>
            <div class="col-xs-6 col-md-4 "> <h3 class="pull-right">Custom Agents</h3></div>
		</div>

		    <div class="row">
				        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Date</th>
                             <th>Company Name</th>
                           <th>email</th>
                            <th>Company Phone/mobile</th>
                            <th>ntn</th>
                            <th>shipping_address</th>
                            <th>billing_address</th>
                       </tr>
                        </thead>
                        <tbody>
                        @foreach ($agents as $agent)
							<tr class="odd gradeX">
                                 <td>{{--date('Y-m-d',$agent->created_at)--}}{{$agent->created_at}}</td>
                               <td>{{ucfirst($agent->company_name)}} {{$agent->first_name}} &nbsp; {{$agent->last_name}}</td>
                                <td>{{$agent->email}}</td>
                                <td>{{$agent->company_phone}}, {{$agent->mobile}}</td>
                                <td>{{$agent->ntn}}</td>
                                <td>{{$agent->shipping_address}}</td>
                                <td>{{$agent->billing_address}}</td>
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