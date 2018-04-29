@extends('layouts.admin')

@section('content')
    <div class="col-md-12"> <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
    <div class="row color-invoice" id="printableArea" >
        <div class="row " style="background:#efefef;" >
            <div class="col-xs-6 col-md-4" >
                <p><br>
                    Bill.No: <strong>{{str_pad( $csc->bill_no, 7, "0", STR_PAD_LEFT )}}</strong>
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
            <div class="col-xs-6 col-md-4 "> <h3 class="pull-right">Draft Bill of Lading</h3></div>
        </div>

        <div class="col-md-12">
            <div class="row">
				<h1>{{ucfirst($csc->agentofcontainer->company_name)}}</h1>
			</div>


            <div class="row">
                <div class="col-lg-4 col-xs-6 col-md-4">
				Vessel <h4>{{$csc->vessel}}</h4>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-4">
				Arrival Date:<h4>{{date('d-m-Y',$csc->arr_date)}}</h4>
				</div>
                <div class="col-lg-4 col-xs-6 col-md-4">
				Voyage <h4>{{$csc->voyage}}</h4>
				</div>
            </div>
            <hr>
            <div class="row bordered">
                <div class="col-lg-3 col-xs-6 col-md-4">
                    total_usd<br>
                    total_rupees<br>
                    total_detention_charges
					transportation_charges<br>
					plugging_charges<br>
					container_cleaning_cost<br>
					container_repairing_cost<br>
					total_charges<br>
					container_deposit_recieved<br>
					balance_amt<br>
					exchangerate
                </div>
                <div class="col-lg-6 col-xs-6 col-md-4" class="">
                    {{$csc->total_usd}}<br>
                    {{$csc->total_rupees}}<br>
                    {{$csc->total_detention_charges}}
					{{$csc->transportation_charges}}<br>
					{{$csc->plugging_charges}}<br>
					{{$csc->container_cleaning_cost}}<br>
					{{$csc->container_repairing_cost}}<br>
					{{$csc->total_charges}}<br>
					{{$csc->container_deposit_recieved}}<br>
					{{$csc->balance_amt}}<br>
					{{$csc->exchangerate}}
                </div>
                <div class="col-lg-3 col-xs-6 col-md-4">
				</div>
            </div>
            <div class="row border-top">
                <div class="col-lg-6 col-xs-6 col-md-4">
                    
                </div>
            </div>
            <hr>

            <!--<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <strong> Important </strong>
                    <ol>
                        <li>Send us checking copy urgently- arwainternational@gmail.com
                        </li>
                    </ol>
                </div>
            </div>-->

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