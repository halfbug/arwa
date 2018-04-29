@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Bill   <a href="{{ url('bill.show') }}"id="btn_add" name="btn_add" class="btn btn-primary">Preview n print</a><a href="{{ url('bill') }}"id="btn_add" name="btn_add" class="btn btn-primary pull-right">Back to Bill Homepage</a></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('bill.update',$bill->id)}}" enctype="multipart/form-data">
        @csrf
         @method('PUT')
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
                                <div class="form-group">
                                    <label >Client of this Bill</label>
                                    <input class="form-control" id="" value="{{$bill->client}}" name="client">
                                </div>
                                <div class="form-group">
                                    <label >Challan Number</label>
                                    <input class="form-control" id="" value="{{$bill->challan}}" name="challan">
                                </div>
                                <div class="form-group">
                                    <label >GD</label>
                                    <input class="form-control" id="" value="{{$bill->gd}}" name="gd">
                                </div>
                                <div class="form-group">
                                    <label >Date</label>
                                    <input class="form-control" id="datepicker" value="{{date('Y-m-d',$bill->date)}}" name="date">
                                </div>

                                <div class="form-group">
                                    <label>bill_no</label>
                                    <input class="form-control" id="bill_no" value="{{$bill->bill_no}}" name="bill_no">

                                </div>
                                 <div class="form-group">
                                    <label >bl_no.</label>
                                    <input class="form-control" id="bl_no" value="{{$bill->bl_no}}" name="bl_no">
                                </div>
                                <div class="form-group">
                                    <label>igm_no</label>
                                    <input class="form-control" value="{{$bill->igm_no}}" name="igm_no">
                                </div>
                                <div class="form-group">
                                    <label>contract No.</label>
                                    <input class="form-control" value="{{$bill->contract_no}}" name="contract_no">
                                </div>
                                <div class="form-group">
                                    <label>No. of Package</label>
                                    <input class="form-control" value="{{$bill->no_of_packages}}" name="no_of_packages">
                                </div>
                                <div class="form-group">
                                    <label>description</label>
                                    <input class="form-control" value="{{$bill->description}}" name="description">
                                </div>
                                <div class="form-group">
                                    <label>per_s_s</label>
                                    <input class="form-control" value="{{$bill->per_s_s}}" name="per_s_s">
                                </div>
                                <div class="form-group">
                                    <label>arr_date</label>
                                    <input class="form-control" value="{{date('Y-m-d',$bill->arr_date)}}" name="arr_date" id="arr_date">
                                </div>
                                <div class="form-group">
                                    <label>from</label>
                                    <input class="form-control" value="{{$bill->from}}" name="from">
                                    <label>for</label>
                                    <input class="form-control" value="{{$bill->for}}" name="for">

                                </div>

                                <div class="form-group">
                                    <label >index_no</label>
                                    <input class="form-control" value="{{$bill->index_no}}" name="index_no">
                                </div>
                                <div class="form-group">
                                    <label >cash_no</label>
                                    <input class="form-control" value="{{$bill->cash_no}}" name="cash_no">
                                </div>
                                <div class="form-group">
                                    <label >value of currency</label>
                                    <input class="form-control" value="{{$bill->value_curr}}" name="value_curr">
                                </div>
                                <div class="form-group">
                                    <label >container_no</label>
                                    <input class="form-control" value="{{$bill->container_no}}" name="container_no">
                                </div>
                                <div class="form-group">
                                    <label >mandi_recipt</label>
                                    <input class="form-control prc" value="{{$bill->mandi_recipt}}" name="mandi_recipt">
                                </div>
                                <div class="form-group">
                                    <label >transportation</label>
                                    <input class="form-control prc" value="{{$bill->transportation}}" name="transportation">
                                </div>
                                <div class="form-group">
                                    <label >truck_detain</label>
                                    <input class="form-control prc" value="{{$bill->truck_detain}}" name="truck_detain">
                                </div>
                                <div class="form-group">
                                    <label >plant_PPRO</label>
                                    <input class="form-control prc" value="{{$bill->plant_PPRO}}" name="plant_PPRO">
                                </div>
                                <div class="form-group">
                                    <label >exm</label>
                                    <input class="form-control prc" value="{{$bill->exm}}" name="exm">
                                </div>
                                <div class="form-group">
                                    <label >assemnt</label>
                                    <input class="form-control prc" value="{{$bill->assemnt}}" name="assemnt">
                                </div>
                                <div class="form-group">
                                    <label >agency</label>
                                    <input class="form-control prc" value="{{$bill->agency}}" name="agency">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>importduty_itax_salestax_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="importduty_itax_salestax_info" id="">{{$bill->importduty_itax_salestax_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >importduty_itax_salestax_amount</label>
                                    <input class="form-control prc" placeholder="amount of importduty_itax_salestax" name="importduty_itax_salestax_amount"value="{{$bill->importduty_itax_salestax_amount}}">
                                </div>
                                <div class="form-group">
                                    <label>detention_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="detention_info" id="">{{$bill->detention_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >detention_amount</label>
                                    <input class="form-control prc" placeholder="amount of detention_amount" name="detention_amount"value="{{$bill->detention_amount}}">
                                </div>
                                <div class="form-group">
                                    <label >sales_tax Amount</label>
                                    <input class="form-control prc" value="{{$bill->sales_tax}}" name="sales_tax">
                                </div>
                                <div class="form-group">
                                    <label>weboc_token_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="weboc_token_info" id="">{{$bill->weboc_token_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >weboc_token_amount</label>
                                    <input class="form-control prc" placeholder="amount of weboc_token" name="weboc_token_amount"value="{{$bill->weboc_token_amount}}">
                                </div>
                                <div class="form-group">
                                    <label>kict_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="kict_info" id="">{{$bill->kict_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >kict_amount</label>
                                    <input class="form-control prc" placeholder="amount of kict_amount"value="{{$bill->kict_amount}}" name="kict_amount">
                                </div>
                                <div class="form-group">
                                    <label>plugging_detention_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="plugging_detention_info" id="">{{$bill->plugging_detention_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >plugging_detention_amount</label>
                                    <input class="form-control prc" placeholder="amount of plugging_detention_amount" name="plugging_detention_amount"value="{{$bill->plugging_detention_amount}}">
                                </div>
                                <div class="form-group">
                                    <label>DO_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="DO_info" id="">{{$bill->DO_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >DO_amount</label>
                                    <input class="form-control prc" placeholder="amount of DO_amount"value="{{$bill->DO_amount}}" name="DO_amount">
                                </div>
                                <div class="form-group">
                                    <label>excise_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="excise_info" id="">{{$bill->excise_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >excise_amount</label>
                                    <input class="form-control prc" placeholder="amount of excise_amount"value="{{$bill->excise_amount}}" name="excise_amount">
                                </div>
                                <div class="form-group">
                                    <label>excise2_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="excise2_info" id="">{{$bill->excise2_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >excise2_amount</label>
                                    <input class="form-control prc" placeholder="amount of excise2_amount"value="{{$bill->excise2_amount}}" name="excise2_amount">
                                </div>
                                <div class="form-group">
                                    <label>plant_challan_info</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="plant_challan_info" id="">{{$bill->plant_challan_info}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >plant_challan_amount</label>
                                    <input class="form-control prc" placeholder="amount of plant_challan" name="plant_challan_amount"value="{{$bill->plant_challan_amount}}">
                                </div>
                                <div class="form-group">
                                    <label >Total Bill Amount</label>
                                    <input class="form-control" value="{{$bill->total_bill_amount}}" name="total_bill_amount" id="total_bill_amount">
                                </div>
                                <div class="form-group">
                                    <label>advance</label>
                                    <input class="form-control" value="{{$bill->advance}}" name="advance" id="advance">
                                </div>


                                <div class="form-group">
                                    <label>balance</label>
                                    <input class="form-control" value="{{$bill->balance}}" name="balance" id="balance">

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
$(document).ready(function () {
 	var total=0;
	var bal=0;
	var adv=0;
	//var adv=$('#advance').val();
	var adv=document.getElementById('advance').value;
	//console.log(adv);
	$('.form-group .prc').each(function(){
    
	var inputval=$(this).val();
	if($.isNumeric(inputval)){
	total+=parseInt(inputval);
	}//if
	});
	total=parseInt(total);
	bal=total-parseInt(adv);
	$('#total_bill_amount').val(total);
	$('#balance').val(bal);
 });

$('.form-group').on('input','.form-control',function(){
	var total=0;
	var bal=0;
   // console.log(total);
	var adv=$('#advance').val();
	$('.form-group .prc').each(function(){
	var inputval=$(this).val();
	if($.isNumeric(inputval)){
	total+=parseInt(inputval);
	}//if
	});
	total=parseInt(total);
	bal=total-parseInt(adv);
	$('#total_bill_amount').val(total);
	$('#balance').val(bal);
});
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