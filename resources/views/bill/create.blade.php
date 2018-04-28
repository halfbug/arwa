@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Bill<a href="{{ route('bill.index') }}"id="btn_add" name="btn_add" class="btn btn-primary pull-right">Back to All Bills</a></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('bill.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">

                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary pull-right ">&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-lg-6">
								<!--<div class="form-group">
									<label><b>Select Client</b></label>

									<select name="client_id" class="form-control">
                                    <option value="">--select value--</option>
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>

								</div>
								<div class="form-group">
									<label><b>Select Challan for this bill</b></label>

									<select name="challan_id" class="form-control">
                                     <option value="">--select value--</option>
                                   @foreach($challan as $chal)
                                    <option value="{{ $chal->id }}">{{ $chal->challan_no }}</option>
                                    @endforeach
									</select>

								</div>
								<div class="form-group">
									<label><b>Select gd for this bill</b></label>

									<select name="gd_id" class="form-control">
                                    <option value="">--select value--</option>
									@foreach($gds as $gd)
                                    <option value="{{ $gd->id }}">igm_egm_index({{ $gd->igm_egm_index }})/dry_port_igm_egm_index({{ $gd->dry_port_igm_egm_index }})</option>
                                    @endforeach
									</select>

								</div>-->
                                <div class="form-group">
                                    <label >Client of this Bill</label>
                                    <input class="form-control" id="" placeholder="" name="client">
                                </div>
                                <div class="form-group">
                                    <label >Challan Number</label>
                                    <input class="form-control" id="" placeholder="" name="challan">
                                </div>
                                <div class="form-group">
                                    <label >GD</label>
                                    <input class="form-control" id="" placeholder="" name="gd">
                                </div>
                                <div class="form-group">
                                    <label >Date</label>
                                    <input class="form-control" id="datepicker" placeholder="" name="date">
                                </div>

                                <div class="form-group">
                                    <label>bill_no</label>
                                    <input class="form-control" id="bill_no" placeholder="" name="bill_no">

                                </div>
                                 <div class="form-group">
                                    <label >bl_no.</label>
                                    <input class="form-control" id="bl_no" placeholder="" name="bl_no">
                                </div>
                                <div class="form-group">
                                    <label>igm_no</label>
                                    <input class="form-control" placeholder="Only numbers" name="igm_no">
                                </div>
                                <div class="form-group">
                                    <label>contract No.</label>
                                    <input class="form-control" placeholder="Enter text" name="contract_no">
                                </div>
                                <div class="form-group">
                                    <label>No. of Package</label>
                                    <input class="form-control" placeholder="Enter text" name="no_of_packages">
                                </div>
                                <div class="form-group">
                                    <label>description</label>
                                    <input class="form-control" placeholder="Enter text" name="description">
                                </div>
                                <div class="form-group">
                                    <label>per_s_s</label>
                                    <input class="form-control" placeholder="Enter text" name="per_s_s">
                                </div>
                                <div class="form-group">
                                    <label>arr_date</label>
                                    <input class="form-control" placeholder="Enter text" name="arr_date" id="arr_date">
                                </div>
                                <div class="form-group">
                                    <label>from</label>
                                    <input class="form-control" placeholder="Enter text" name="from">
                                    <label>for</label>
                                    <input class="form-control" placeholder="Enter text" name="for">

                                </div>

                                <div class="form-group">
                                    <label >index_no</label>
                                    <input class="form-control" placeholder="" name="index_no">
                                </div>
                                <div class="form-group">
                                    <label >cash_no</label>
                                    <input class="form-control" placeholder="" name="cash_no">
                                </div>
                                <div class="form-group">
                                    <label >value of currency</label>
                                    <input class="form-control" placeholder="only numbers" name="value_curr">
                                </div>
                                <div class="form-group">
                                    <label >container_no</label>
                                    <input class="form-control" placeholder="only numbers" name="container_no">
                                </div>
                                <div class="form-group">
                                    <label >mandi_recipt</label>
                                    <input class="form-control" placeholder="only numbers" name="mandi_recipt" id="mandi_recipt" value=0>
                                </div>
                                <div class="form-group">
                                    <label >transportation</label>
                                    <input class="form-control" placeholder="only numbers" name="transportation" id="transportation" value=0>
                                </div>
                                <div class="form-group">
                                    <label >truck_detain</label>
                                    <input class="form-control" placeholder="only numbers" name="truck_detain" id="truck_detain" value=0>
                                </div>
                                <div class="form-group">
                                    <label >plant_PPRO</label>
                                    <input class="form-control" placeholder="only numbers" name="plant_PPRO" id="plant_PPRO" value=0>
                                </div>
                                <div class="form-group">
                                    <label >exm</label>
                                    <input class="form-control" placeholder="only numbers" name="exm" id="exm" value=0>
                                </div>
                                <div class="form-group">
                                    <label >assemnt</label>
                                    <input class="form-control" placeholder="only numbers" name="assemnt" id="assemnt" value=0>
                                </div>
                                <div class="form-group">
                                    <label >agency</label>
                                    <input class="form-control" placeholder="only numbers" name="agency" id="agency" value=0>
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>importduty_itax_salestax_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="importduty_itax_salestax_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >importduty_itax_salestax_amount</label>
                                    <input class="form-control" placeholder="amount of importduty_itax_salestax" name="importduty_itax_salestax_amount" id="importduty_itax_salestax_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>weboc_token_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="weboc_token_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >weboc_token_amount</label>
                                    <input class="form-control" placeholder="amount of weboc_token" name="weboc_token_amount" id="weboc_token_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>detention_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="detention_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >detention_amount</label>
                                    <input class="form-control" placeholder="amount of detention_amount" name="detention_amount" id="detention_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label >sales_tax Amount</label>
                                    <input class="form-control" placeholder="only numbers" name="sales_tax" id="sales_tax" value=0>
                                </div>
                                <div class="form-group">
                                    <label>kict_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="kict_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >kict_amount</label>
                                    <input class="form-control" placeholder="amount of kict_amount" name="kict_amount" id="kict_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>plugging_detention_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="plugging_detention_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >plugging_detention_amount</label>
                                    <input class="form-control" placeholder="amount of plugging_detention_amount" name="plugging_detention_amount" id="plugging_detention_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>DO_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="DO_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >DO_amount</label>
                                    <input class="form-control" placeholder="amount of DO_amount" name="DO_amount" id="DO_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>excise_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="excise_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >excise_amount</label>
                                    <input class="form-control" placeholder="amount of excise_amount" name="excise_amount" id="excise_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>excise2_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="excise2_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >excise2_amount</label>
                                    <input class="form-control" placeholder="amount of excise2_amount" name="excise2_amount" id="excise2_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label>plant_challan_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="plant_challan_info" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >plant_challan_amount</label>
                                    <input class="form-control" placeholder="amount of plant_challan" name="plant_challan_amount" id="plant_challan_amount" value=0>
                                </div>
                                <div class="form-group">
                                    <label >Total Bill Amount</label>
                                    <input class="form-control" placeholder="numbers value only" id="total_bill_amount" name="total_bill_amount">
                                </div>
                                <div class="form-group">
                                    <label>advance</label>
                                    <input class="form-control" placeholder="Enter text" name="advance" id="advance" value=0>
                                </div>


                                <div class="form-group">
                                    <label>balance</label>
                                    <input class="form-control" placeholder="Enter text" name="balance" id="balance">

                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.panel-body -->
                    <div class="panel-footer">
                        <div class="row">

                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary pull-right ">&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </form>

@endsection

@section('script')
<script>
$(document).ready(function() {
    //this calculates values automatically 
   //sum();
    $("#importduty_itax_salestax_amount, #weboc_token_amount,#sales_tax,#detention_amount,#kict_amount,#plugging_detention_amount,#DO_amount,#excise_amount,#excise2_amount,#plant_challan_amount,#mandi_recipt,#transportation,#truck_detain,#plant_PPRO,#exm,#assemnt,#agency,#advance").on("keydown keyup", function() {
        sum();
    });
});

function sum() {
	
      	var num1 = document.getElementById('importduty_itax_salestax_amount').value;
            var num2 = document.getElementById('weboc_token_amount').value;
            var num3 = document.getElementById('sales_tax').value;
            var num4 = document.getElementById('detention_amount').value;
            var num5 = document.getElementById('kict_amount').value;
            var num6 = document.getElementById('plugging_detention_amount').value;
            var num7 = document.getElementById('DO_amount').value;
            var num8 = document.getElementById('excise_amount').value;
            var num9 = document.getElementById('excise2_amount').value;
            var num11 = document.getElementById('plant_challan_amount').value;
            var num12 = document.getElementById('mandi_recipt').value;
            var num13 = document.getElementById('transportation').value;
            var num14 = document.getElementById('truck_detain').value;
            var num15 = document.getElementById('plant_PPRO').value;
            var num16 = document.getElementById('exm').value;
            var num17 = document.getElementById('assemnt').value;
            var num18 = document.getElementById('agency').value;
            
			var advance = document.getElementById('advance').value;
            var advance = parseInt(advance);
			
			var total = parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4) + parseInt(num5) + parseInt(num6) + parseInt(num7) + parseInt(num8) + parseInt(num9) + parseInt(num11) + parseInt(num12) + parseInt(num13) + parseInt(num14) + parseInt(num15) + parseInt(num16) + parseInt(num17) + parseInt(num18);
			var total = parseInt(total);
			var balance = total - advance;
 console.log(total);          
				document.getElementById('balance').value = parseInt(balance);
 			   document.getElementById('total_bill_amount').value = total;
          if (!isNaN(total)) {
			   document.getElementById('total_bill_amount').value = total;
				//document.getElementById('balance').value = balance;
            }
        }
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,

format: 'dd-mm-yyyy'
        });
        $('#arr_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        </script>
@endsection