@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Sales Tax</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{url('sales-tax')}}" enctype="multipart/form-data">
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
                            <lable><b>Client</b></lable>
                            <select name="client_id" class="form-control">
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->first_name}} &nbsp; {{$client->last_name}} - [{{$client->type}}]</option>

                                 @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="value">Sales Tax</label>
                            <input type="text" class="form-control" name="value">
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