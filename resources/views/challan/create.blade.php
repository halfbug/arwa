@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Challan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('challan.store')}}" enctype="multipart/form-data">
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
                        <div class="col-md-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>

                    </div>


                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label><b>Select Trader</b></label>

                                <select name="name" class="form-control">
                                    @foreach($clients as $trader)
                                    <option value="{{ $trader->id }}">{{ $trader->company_name }}</option>
                                    @endforeach
                                </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="headofaccount">Head of Account</label>
                            <input type="text" class="form-control" name="headofaccount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="challan_no">challan number</label>
                            <input type="text" class="form-control" name="challan_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="B/E_GD_no">B/E GD no</label>
                            <input type="text" class="form-control" name="B/E_GD_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="B/E_cash_no">B/E_cash_no</label>
                            <input type="text" class="form-control" name="B/E_cash_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="clearing_agent">clearing agent</label>
                            <input type="text" class="form-control" name="clearing_agent">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="no_of_container">number of container</label>
                            <input type="text" class="form-control" name="no_of_container">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="assessed_value">assessed value</label>
                            <input type="text" class="form-control" name="assessed_value">
                            <label for="assessed_value_currency">currency for assessed value</label>
                            <select class="form-control" name="assessed_value_currency">
							<option value="PKR">PKR</option>
							<option value="USD">USD</option>
							</select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="gross_weight">gross_weight</label>
                            <input type="text" class="form-control" name="gross_weight">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="net_weight">net_weight</label>
                            <input type="text" class="form-control" name="net_weight">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="cass_amount_percentage">cass_amount_percentage</label>
                            <input type="text" class="form-control" name="cass_amount_percentage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="cass_amount">cass_amount</label>
                            <input type="text" class="form-control" name="cass_amount"><select class="form-control" name="cass_amount_currency">
							<option value="PKR">PKR</option>
							<option value="USD">USD</option>
							</select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="amount_charged_on_distance">amount_charged_on_distance</label>
                            <input type="text" class="form-control" name="amount_charged_on_distance">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="stamp_duty_on_BE">stamp_duty_on_BE</label>
                            <input type="text" class="form-control" name="stamp_duty_on_BE"><select class="form-control" name="stamp_duty_currency">
							<option value="PKR">PKR</option>
							<option value="USD">USD</option>
							</select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="total_amount">total_amount</label>
                            <input type="text" class="form-control" name="total_amount">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <strong>Date : </strong>
                            <input class="date form-control"  type="text" id="datepicker" name="date">
                        </div>
                    </div>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection