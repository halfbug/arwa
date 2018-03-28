@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Commercial Invoice</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('invoice.store')}}" enctype="multipart/form-data">
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
                            <label><b>Select Client of Invoice(Invoice from)</b></label>

                                <select name="client_id" class="form-control">
                                    @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                                    @endforeach
                                </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="invoice_to">InvoiceTo</label>
                            <input type="text" class="form-control" name="invoice_to">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="invoice_no">invoice number</label>
                            <input type="text" class="form-control" name="invoice_no">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <strong>Invoice Date : </strong>
                            <input class="date form-control"  type="text" id="datepicker" name="invoice_date">
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="S/C_NC">S/C_NC no</label>
                            <input type="text" class="form-control" name="S/C_NC">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <strong>S/C_NC Date : </strong>
                            <input class="date form-control"  type="text" id="datepicker1" name="S/C_NC_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="B/L_no">B/L_no</label>
                            <input type="text" class="form-control" name="B/L_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="container_no">container_no</label>
                            <input type="text" class="form-control" name="container_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="HScode">HScode</label>
                            <input type="text" class="form-control" name="HScode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="countryoforigin">country of origin  </label>
                            <input type="text" class="form-control" name="countryoforigin">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="goods_description">goods_description</label>
                            <input type="text" class="form-control" name="goods_description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="goods_qty">goods_qty</label>
                            <input type="text" class="form-control" name="goods_qty">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="goods_unit_price">goods_unit_price</label>
                            <input type="text" class="form-control" name="goods_unit_price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="amount">amount</label>
                            <input type="text" class="form-control" name="amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="amount_in_words">amount_in_words</label>
                            <input type="text" class="form-control" name="amount_in_words">
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
        $('#datepicker1').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection