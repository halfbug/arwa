@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">Commercial Invoice <a href="{{ route('invoice.create') }}"id="btn_add" name="btn_add" class="btn btn-primary pull-right">Add New</a></h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        @if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif

        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>From</th>
                            <th>To</th>

                            <th >Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comm_invoice as $invoice)
                            <tr class="odd gradeX">
                                <td>{{date('Y-m-d',$invoice->date)}}</td>
                                <td>{{$invoice->client->company_name}} </td>
                                <td>{{$invoice->invoice_to}}</td>


                                <td class="center">
                                    <form action="{{ route('invoice.destroy',$invoice->id) }}" method="POST">


                                        <!--<a class="btn btn-info" title="Invoice" href="{{ route('order.show',$invoice->id) }}"><i class="fa fa-file fa-fw"></i></a>
                                        <a class="btn btn-primary" title="Edit" href="{{ route('invoice.edit',$invoice->id) }}"><i class="fa fa-edit fa-fw"></i></a>-->


                                        @csrf
                                        @method('DELETE')


                                        <button type="submit" class="btn btn-danger" title="Delete"><i class="fa fa-trash-o fa-fw"></i></button>
                                    </form>
                                    {{--<a href="tables.html"><i class="fa fa-file fa-fw"></i> </a>--}}
                                    {{--<a href="tables.html"><i class="fa fa-edit fa-fw"></i> </a>--}}
                                    {{--<a href="tables.html"><i class="fa fa-trash-o fa-fw"></i> </a>--}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

@section('script')
    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection