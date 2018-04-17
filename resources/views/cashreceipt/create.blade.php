@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Cash Payment Receipt<a href="{{ url('allreceipt') }}"id="btn_add" name="btn_add" class="btn btn-primary pull-right">Back to All Receipts</a></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('cashreceipt.store')}}" enctype="multipart/form-data">
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
									<label><b>Select Client</b></label>

									<select name="client_id" class="form-control">
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>

								</div>
                                <div class="form-group">
                                    <label >Date</label>
                                    <input class="form-control" id="datepicker" placeholder="" name="date">
                                </div>

                                <div class="form-group">
                                    <label>cash_no</label>
                                    <input class="form-control" id="cash_no" placeholder="" name="cash_no">

                                </div>
                                 <div class="form-group">
                                    <label >GD No.</label>
                                    <input class="form-control" id="gd_no" placeholder="" name="gd_no">
                                </div>
                                <div class="form-group">
                                    <label>BL/AWB No.</label>
                                    <input class="form-control" placeholder="Enter text" name="blawb_no">
                                </div>
                                <div class="form-group">
                                    <label>Index No.</label>
                                    <input class="form-control" placeholder="Enter text" name="index_no">
                                </div>
                                <div class="form-group">
                                    <label>vessel_name</label>
                                    <input class="form-control" placeholder="Enter text" name="vessel_name">
                                </div>
                                <div class="form-group">
                                    <label>agent_name</label>
                                    <input class="form-control" placeholder="Enter text" name="agent_name">
                                </div>
                                <div class="form-group">
                                    <label>package_type</label>
                                    <input class="form-control" placeholder="Enter text" name="package_type">
                                </div>
                                <div class="form-group">
                                    <label>No. of Package</label>
                                    <input class="form-control" placeholder="Enter text" name="no_of_package">
                                </div>
								<div class="form-group">
									<label><b>Select Payee</b></label>

									<select name="payee_id" class="form-control">
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>

								</div>
                                <div class="form-group">
                                    <label>psid_no</label>
                                    <input class="form-control" placeholder="Enter text" name="psid_no">

                                </div>

                                <div class="form-group">
                                    <label >instrument_no</label>
                                    <input class="form-control" placeholder="" name="instrument_no">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>paymentbreakup</label>
                                    <textarea class="form-control" rows="6" style="height: 200px"  name="paymentbreakup" id="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label >Payment_amount</label>
                                    <input class="form-control" placeholder="" name="Payment_amount">
                                </div>
                                <div class="form-group">
                                    <label >Total Amount</label>
                                    <input class="form-control" placeholder="" name="total_amount">
                                </div>
                                <div class="form-group">
                                    <label>amount_in_words</label>
                                    <input class="form-control" placeholder="Enter text" name="amount_in_words">
                                </div>


                                <div class="form-group">
                                    <label>payment_mode</label>
                                    <input class="form-control" placeholder="Enter text" name="payment_mode">

                                </div>
                                <div class="form-group">
                                    <label >bank</label>
                                    <input class="form-control" placeholder="Enter text" name="bank">
                                </div>
                                <div class="form-group">
                                    <label >city</label>
                                    <input class="form-control" placeholder="" name="city">
                                </div>
                                <div class="form-group">
                                    <label >branch</label>
                                    <input class="form-control" placeholder="" name="branch">
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

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        </script>
@endsection