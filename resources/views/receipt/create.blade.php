@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Receipt</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('receipt.store')}}" enctype="multipart/form-data">
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
                                    <label>received_from</label>
                                    <input class="form-control" id="received_from" placeholder="" name="received_from">

                                </div>
                                 <div class="form-group">
                                    <label >printed_on Date</label>
                                    <input class="form-control" id="printed_on" placeholder="" name="printed_on">
                                </div>
                                <div class="form-group">
                                    <label>receipt No</label>
                                    <input class="form-control" placeholder="Enter text" name="receipt_no">
                                </div>
                                <div class="form-group">
                                    <label>amount_in_words</label>
                                    <input class="form-control" placeholder="Enter text" name="amount_in_words">
                                </div>


                                <div class="form-group">
                                    <label>payorder_no</label>
                                    <input class="form-control" placeholder="Enter text" name="payorder_no">

                                </div>
                                <div class="form-group">
                                    <label>payorder_amount</label>
                                    <input class="form-control" placeholder="Enter text" name="payorder_amount">

                                </div>

                                <div class="form-group">
                                    <label>drawn_on</label>
                                    <textarea class="form-control" rows="3" name="drawn_on"></textarea>
                                </div>

                                <div class="form-group">
                                    <label >Total Amount</label>
                                    <input class="form-control" placeholder="" name="total_amount">
                                </div>
                                <div class="form-group">
                                    <label >bl_no</label>
                                    <input class="form-control" placeholder="Enter text" name="bl_no">
                                </div>
                                <div class="form-group">
                                    <label >index_no</label>
                                    <input class="form-control" placeholder="" name="index_no">
                                </div>
                                <div class="form-group">
                                    <label >vessel_no</label>
                                    <input class="form-control" placeholder="" name="vessel_no">
                                </div>
                                <div class="form-group">
                                    <label >Remarks</label>
                                    <input class="form-control" placeholder="" name="remarks">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>on_account_of</label>
                                    <textarea class="form-control" rows="6" style="height: 200px"  name="on_account_of" id="summernote"></textarea>
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
        $('#printed_on').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        </script>
@endsection