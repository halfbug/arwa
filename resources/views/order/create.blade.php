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
                                    <textarea class="form-control" rows="3" id="summernote1" name="gross_weight"></textarea>

                                </div>

                                <div class="form-group">
                                    <label>Measurement</label>
                                    <textarea class="form-control" rows="3" id="summernote2" name="measurement"></textarea>

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
        height: 450,
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
    $('#summernote2').summernote({
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
@endsection