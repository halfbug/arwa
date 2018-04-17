@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">Receipts</h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th >Options</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>Received Payment Receipt</td>

                                <td class="center">

                                        <a class="btn btn-info" href="{{ route('receipt.index') }}">Show All</a>
                                        <a class="btn btn-primary" href="{{ route('receipt.create') }}">Create</a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Cash Payment Receipt</td>
                                <td class="center">
                                <a class="btn btn-info" href="{{ route('cashreceipt.index') }}">Show All</a>
                                        <a class="btn btn-primary" href="{{ route('cashreceipt.create') }}">Create</a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Bill</td>
                                <td class="center">
                                <a class="btn btn-info" href="{{ route('bill.index') }}">Show All</a>
                                        <a class="btn btn-primary" href="{{ route('bill.create') }}">Create</a>
                                </td>
                            </tr>
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