@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Container Service Charges </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post"  enctype="multipart/form-data" action="{{route('csc.store')}}">
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
                      
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="vessel">Vessel</label>
                            <input type="text" class="form-control" name="Vessel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="voyage">Voyage</label>
                            <input type="text" class="form-control" name="Voyage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="arr_date">Arrival</label>
                            <input class="date form-control"  type="text" id="arr_date" name="arr_date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="bill_land_no">Bill of Landing No. </label>
                            <input type="text" class="form-control" name="bill_land_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="index_no">Index No. </label>
                            <input type="text" class="form-control" name="index_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="cf_agent">Name of consignee / C&amp;F Agent </label>
                                <select name="cf_agent" class="form-control">
                                    @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="container_no">Container # </label>
                            <input type="text" class="form-control" name="container_no">
                            <label for="assessed_value_currency"></label>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="size">size</label>
                            <input type="text" class="form-control" name="size">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="gate_out">Gate Out</label>
                            <input type="text" class="date form-control" name="gate_out" id="gate_out">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="gate_in">Gate In</label>
                            <input type="text" class="date form-control" name="gate_in" id="gate_in">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="total_days">Total days</label>
                            <input type="text" class="form-control" name="total_days">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="free_days">Free days</label>
                            <input type="text" class="form-control" name="free_days">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="detention_days">Detantion Days</label>
                            <input type="text" class="form-control" name="detention_days">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                            <label for="total_usd">Total USD</label>
                            <input type="text" class="form-control" name="total_usd">
                      </div>
                    </div>
					  <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="total_rupees">Total Rupee </label>
                            <input type="text" class="form-control" name="total_rupees">
                        </div>
                    </div>
					  </div>
					  <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="total_detention_charges">Total detention Charges </label>
                            <input type="text" class="form-control" name="total_detention_charges">
                        </div>
                    </div>  </div>
					  <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="transportation_charges">Transportation Charges </label>
                            <input type="text" class="form-control" name="transportation_charges">
                        </div>
                    </div>  </div>
					  <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="plugging_charges">Plugging Charges </label>
                            <input type="text" class="form-control" name="plugging_charges">
                        </div>
                    </div>
					 <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="container_cleaning_cost">Container Cleaning Cost  </label>
                            <input type="text" class="form-control" name="container_cleaning_cost">
                        </div>
                    </div> <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="container_repairing_cost">Container Repairing Cost  </label>
                            <input type="text" class="form-control" name="container_repairing_cost">
                        </div>
                    </div> <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="total_charges">Total Charges </label>
                            <input type="text" class="form-control" name="total_charges">
                        </div>
                    </div>
					 <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="container_deposit_recieved">Container Deposit Recieved  </label>
                            <input type="text" class="form-control" name="container_deposit_recieved">
                        </div>
                    </div> <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="total_amount">Balance Amount </label>
                            <input type="text" class="form-control" name="balance_amt">
                        </div>
                    </div>


                    
                   
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
        $('#arr_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('#gate_in').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('#gate_out').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection