@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{url('order')}}" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label >Date</label>
                                    <input class="form-control" id="datepicker" placeholder="" name="date">
                                </div>

                                <div class="form-group">
                                    <label>Shipper</label>
                                    <select class="itemName form-control"  name="shipper"></select>

                                </div>
                                <div class="form-group">
                                    <label>Consignee</label>
                                    <select class="itemName1 form-control"  name="consignee"></select>
                                </div>
                                <div class="form-group">
                                    <label>Notify Party</label>
                                    <select class="itemName2 notify_party form-control"  name="notify_party"></select>
                                </div>
                                <div class="form-group">
                                    <label>Vessel and Voyage No</label>
                                    <input class="form-control" placeholder="Enter text" name="voyage_no">
                                </div>
                                <div class="form-group">
                                    <label>Bill of landing no</label>
                                    <input class="form-control" placeholder="Enter text" name="bill_landing_no">
                                </div>
                                <div class="form-group">
                                    <label>Export Ref</label>
                                    <input class="form-control" placeholder="Enter text" name="export_ref">
                                </div>
                                <div class="form-group">
                                    <label>Booking No</label>
                                    <input class="form-control" placeholder="Enter text" name="booking_no">
                                </div>
                                <div class="form-group">
                                    <label>Port of Loading</label>
                                    <input class="form-control" placeholder="Enter text" name="loading_at">
                                </div>


                                <div class="form-group">
                                    <label>Port of Discharge</label>
                                    <input class="form-control" placeholder="Enter text" name="discharge_at">

                                </div>
                                <div class="form-group">
                                    <label>Place of Delivery</label>
                                    <input class="form-control" placeholder="Enter text" name="delivery_at">

                                </div>

                                <div class="form-group">
                                    <label>Marks &amp; Numbers</label>
                                    <textarea class="form-control" rows="3" name="marks_number"></textarea>
                                </div>

                                <div class="form-group">
                                    <label >Total Amount</label>
                                    <input class="form-control" placeholder="" name="amount">
                                </div>

                                <div class="form-group">
                                    <label >Movement</label>
                                    <input class="form-control" placeholder="Enter text" name="movement">
                                </div>
                                <div class="form-group">
                                    <label >Freight</label>
                                    <input class="form-control" placeholder="" name="freight">
                                </div>
                                <div class="form-group">
                                    <label >Number of Original</label>
                                    <input class="form-control" placeholder="" name="original_no">
                                </div>
                                <div class="form-group">
                                    <label >No. Of Containers</label>
                                    <input class="form-control" placeholder="Enter text" name="containers_no">
                                </div>
                                <div class="form-group">
                                    <label >Remarks</label>
                                    <input class="form-control" placeholder="" name="remarks">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Number and Kind of Packages Description of Goods</label>
                                    <textarea class="form-control" rows="12" style="height: 200px" name="goods_description" id="summernote"></textarea>

                                </div>

                                <div class="form-group">
                                    <label>Gross Weight</label>
                                    <textarea class="form-control" id="" name="gross_weight"></textarea>

                                </div>

                                <div class="form-group">
                                    <label>Measurement</label>
                                    <textarea class="form-control" id="" name="measurement"></textarea>

                                </div>
				<input type="hidden" name="contacts" id="contacts" value="1">	<div id="form-contacts-container" class="form-contacts-container">
							<h3>Container 1</h3>
								<div class="form-group">
                                    <label>Freight & Charges</label>
                                    <textarea class="form-control" id="" name="freight_charges"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Revenue Terms</label>
                                    <textarea class="form-control" id="" name="rev_terms"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rate</label>
                                    <textarea class="form-control" id="" name="rate"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Per</label>
                                    <textarea class="form-control" id="" name="per"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <textarea class="form-control" id="" name="amount"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Prepaid</label>
                                    <textarea class="form-control" id="" name="prepaid"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Collect</label>
                                    <textarea class="form-control" id="" name="collect"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Freight & Charges Payable at/by</label>
                                    <textarea class="form-control" id="" name="f_c_payable_by"></textarea>
                                </div>
							</div><!--  toggle div-->
    <div class="form-contacts-add">
        <input type="button" value="Add More Container" id="add-fields">
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

    $('#summernote').summernote({
        height: 200,
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']]

    ]
    });
    $('#summernote1').summernote({
        height: 100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]

        ]
    });
    $('#summernote2').summernote({
        height: 100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]

        ]
    });

    $('.itemName').select2({
        placeholder: 'Select a Company',
        ajax: {
            url:'{{url('/clientsearch')}}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.company_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.itemName1').select2({
        placeholder: 'Select a Company',
        ajax: {
            url:'{{url('/clientsearch')}}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.company_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.itemName2').select2({
        placeholder: 'Select a Company',
        ajax: {
            url:'{{url('/clientsearch')}}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.company_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });


    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        </script>
		
	<script type="text/javascript">
    var total = 1; // Our default for how many contacts we have


    $( document ).on( 'click', '#add-fields', function() {

        var addBlockId = total = total + 1;
		//console.log(addBlockId);
        var addBlock = document.createElement('div');
        $(addBlock).addClass('form-contact');
        $(addBlock).attr('id','form-contact-' + addBlockId);
console.log(total);
        var inputName = document.createElement('input');
        $(inputName).attr('type','text');
        $(inputName).attr('class','form-control');
        $(inputName).attr('name','freight_charges-' + addBlockId);
        $(inputName).attr('id','freight_charges-' + addBlockId);
        $(inputName).attr('placeholder','Freight & Charges');
        $(inputName).appendTo($(addBlock));

        var inputEmail = document.createElement('input');
        $(inputEmail).attr('type','text');
        $(inputEmail).attr('class','form-control');
        $(inputEmail).attr('name','rev_terms-' + addBlockId);
        $(inputEmail).attr('id','rev_terms-' + addBlockId);
        $(inputEmail).attr('placeholder','Revenue Terms');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputEmail).appendTo($(addBlock));

        var inputPhone = document.createElement('input');
        $(inputPhone).attr('type','text');
        $(inputPhone).attr('class','form-control');
        $(inputPhone).attr('name','rate-' + addBlockId);
        $(inputPhone).attr('id','rate-' + addBlockId);
        $(inputPhone).attr('placeholder','Rate');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputPhone).appendTo($(addBlock));
		
        var inputPer = document.createElement('input');
        $(inputPer).attr('type','text');
        $(inputPer).attr('class','form-control');
        $(inputPer).attr('name','per-' + addBlockId);
        $(inputPer).attr('id','per-' + addBlockId);
        $(inputPer).attr('placeholder','per');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputPer).appendTo($(addBlock));
		
		var inputAmount = document.createElement('input');
        $(inputAmount).attr('type','text');
        $(inputAmount).attr('class','form-control');
        $(inputAmount).attr('name','amount-' + addBlockId);
        $(inputAmount).attr('id','amount-' + addBlockId);
        $(inputAmount).attr('placeholder','amount');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputAmount).appendTo($(addBlock));
		
        var inputPrepaid = document.createElement('input');
        $(inputPrepaid).attr('type','text');
        $(inputPrepaid).attr('class','form-control');
        $(inputPrepaid).attr('name','prepaid-' + addBlockId);
        $(inputPrepaid).attr('id','prepaid-' + addBlockId);
        $(inputPrepaid).attr('placeholder','prepaid');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputPrepaid).appendTo($(addBlock));
		
        var inputCollect = document.createElement('input');
        $(inputCollect).attr('type','text');
        $(inputCollect).attr('class','form-control');
        $(inputCollect).attr('name','collect-' + addBlockId);
        $(inputCollect).attr('id','collect-' + addBlockId);
        $(inputCollect).attr('placeholder','collect');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputCollect).appendTo($(addBlock));

        var inputFcpayable = document.createElement('input');
        $(inputFcpayable).attr('type','text');
        $(inputFcpayable).attr('class','form-control');
        $(inputFcpayable).attr('name','f_c_payable_by-' + addBlockId);
        $(inputFcpayable).attr('id','f_c_payable_by-' + addBlockId);
        $(inputFcpayable).attr('placeholder','Freight & Charges Payable at or by');
		var nn="<br>";
        $(nn).appendTo($(addBlock));
        $(inputFcpayable).appendTo($(addBlock));

		var newLine='<h3>Container '+ addBlockId +'</h3>';

        $(newLine).appendTo($('.form-contacts-container'));
        $(addBlock).appendTo($('.form-contacts-container'));
        $('#contacts').val(total);

    });

</script>

@endsection