@extends('layouts.admin')

@section('content')
    <div class="col-md-12"> <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
    <div class="row color-invoice" id="printableArea" >
        <div class="row " style="background:#efefef;" >
            <div class="col-xs-6 col-md-4" >
                <p><br>
                    Bill.No: <strong>{{str_pad( $bill->bill_no, 7, "0", STR_PAD_LEFT )}}</strong>
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
                <div class="col-lg-4 col-xs-6 col-md-4">
				Bill No. <h4>{{$bill->bill_no}}</h4>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-4">
				Date:<h4>{{date('d-m-Y',$bill->date)}}</h4>
				</div>
                <div class="col-lg-4 col-xs-6 col-md-4">
				B/L no. <h4>{{$bill->bl_no}}</h4>
				</div>
            </div>
            <div class="row">
				To:<h4>{{ucfirst($bill->client)}}</h4>
			</div>
            <div class="row">
				<h4>Contract No.</h4>
			</div>
            <hr>
            <div class="row bordered">
                <div class="col-lg-3 col-xs-6 col-md-4">
                    No. of packages{{ucfirst($bill->company_name)}}<br>
                    Description{{$bill->description}}<br>
                    Per S.S.{{$bill->per_s_s}}
					Arr date{{$bill->arr_date}}<br>
					From{{$bill->from}}<br>
					For{{$bill->for}}<br>
					IGM no{{$bill->igm_no}}<br>
					Index{{$bill->index_no}}<br>
					Cash no{{$bill->cash_no}}<br>
					Value rs{{$bill->value_curr}}<hr>
					Container No.{{$bill->container_no}}
                </div>
                <div class="col-lg-6 col-xs-6 col-md-4" class="">
                    Import Duty {{strtoupper($bill->importduty_itax_salestax_info)}}<br>
                    WeBOC token {{strtoupper($bill->weboc_token_info)}}<br>
                    Sales Tax<br>
					Detention {{strtoupper($bill->detention_info)}}<br>
					KICT charges {{strtoupper($bill->kict_info)}}<br>
					Plugging n Detention {{strtoupper($bill->plugging_detention_info)}}<br>
					DO {{strtoupper($bill->DO_info)}}<br>
					excise {{strtoupper($bill->excise_info)}}<br>
					excise {{strtoupper($bill->excise2_info)}}<br>
					Plant Challan {{strtoupper($bill->plant_challan_info)}}<br>
					Mandi receipt<br>
					transportaion<br>
					truck detain<br>
					plant PPRO<br>
					exm<br>
					Assmnt<br>
					Agency<br>
					 <br>
					 <br>
                </div>
                <div class="col-lg-3 col-xs-6 col-md-4">
                    {{$bill->importduty_itax_salestax_amount}}<br>
                    {{$bill->weboc_token_amount}}<br>
                    {{$bill->sales_tax}}<br>
					{{$bill->detention_amount}}<br>
					{{$bill->kict_amount}}<br>
					{{$bill->plugging_detention_amount}}<br>
					{{$bill->DO_amount}}<br>
					{{$bill->excise_amount}}<br>
					{{$bill->excise2_amount}}<br>
					{{$bill->plant_challan_amount}}<br>
					{{$bill->mandi_recipt}}<br>
					{{$bill->transportation}}<br>
					{{$bill->truck_detain}}<br>
					{{$bill->plant_PPRO}}<br>
					{{$bill->exm}}<br>
					{{$bill->assemnt}}<br>
					{{$bill->agency}}<hr>
					TOTAL {{$bill->total_bill_amount}}<br><br>
					ADVANCE {{$bill->advance}}<br><br>
					BALANCE {{$bill->balance}}<hr>				
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