@extends('layouts.admin')

@section('content')
    <div class="col-md-12"> <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
    <div class="row color-invoice" id="printableArea" >
        <div class="row " style="background:#efefef;" >
            <div class="col-xs-6 col-md-4" >
                <p><br>
                    Invoice.No: <strong>{{str_pad( $order->id, 7, "0", STR_PAD_LEFT )}}</strong>
                    <br>
                    <i class="fa fa-envelope-o"></i> <strong> arwainternational@gmail.com</strong>
                    <br />
                    <i class="fa fa-phone"></i> <strong>92-21-32472480</strong>
                    <i class="fa fa-fax"></i> 92-21-32472316
<br>
                    <i class=" fa fa-map-marker "></i> OFFICE # 914, 9 TH FLOOR
                        JILANI TOWER,<br>M.A JINNAH ROAD
                        KARACHI PAKISTAN
                </p>
    </div>
            <div class="col-xs-6 col-md-4">
                <img src="{{url('images/Logo 2.png')}}"  width="100%" height="100%"/></div>
            <div class="col-xs-6 col-md-4 "> <h3 class="pull-right">Draft Bill of Lading</h3></div>
        </div>

        <div class="col-md-12">


            <div class="row">
                <div class="col-lg-7 col-xs-6 col-md-4">

                    <h2>  Shipper</h2>
                    {{ucfirst($order->shippers->company_name)}}<br>
                    {{$order->shippers->billing_address}}<br>
                    {{$order->shippers->country}}

                </div>
                <div class="col-lg-5 col-xs-6 col-md-4">

                    <h2>   Consignee</h2>
                    {{ucfirst($order->consignees->company_name)}}<br>
                    {{$order->consignees->billing_address}}<br>
                    {{$order->consignees->country}}
                </div>
            </div>
            <hr>
            <div class="row border-top">
                <div class="col-lg-7 col-xs-6 col-md-4">
                    <h3>Notify Party </h3>
                    {{ucfirst($order->notifyParties->company_name)}}<br>
                    {{$order->notifyParties->billing_address}}<br>
                    {{$order->notifyParties->country}}
                </div>
                <div class="col-lg-5 col-xs-6 col-md-4">
                    <dl>

                        <dt>Place of Delivery</dt>
                        <dd>{{$order->delivery_at}}</dd>
                        <dt>Port of Discharge</dt>
                        <dd>{{$order->discharge_at}}</dd>
                        <dt>Port of Loading</dt>
                        <dd>{{$order->loading_at}}</dd>
                    </dl>
                </div>
            </div>
            <hr>
            <div class="row border-top">
                <div class="col-lg-6 col-xs-6 col-md-4">
                    <strong>Vessel and Voyage No</strong> &nbsp; {{$order->voyage_no}}
                </div>
            </div>
            <hr>

            <div class="row border-top">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Marks &amp; Numbers</th>
                                <th>Number and Kind of Packages
                                    Description of Goods</th>
                                <th>Gross Weight</th>
                                <th>Measurement</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{!!$order->marks_number!!}</td>
                                <td>{!!$order->goods_description!!}</td>
                                <td>{!!$order->gross_weight!!}</td>
                                <td>{!!$order->measurement!!}</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr>

                    <div class="row border-top">
                        <div class="col-lg-7 col-xs-6 col-md-4">
                            <dl>
                                <dt>No. Of Containers</dt>
                                <dd>{{$order->containers_no}}</dd>
                                <dt>Movement</dt>
                                <dd>{{$order->movement}}</dd>

                            </dl>
                        </div>
                        <div class="col-lg-5 col-xs-6 col-md-4">
                            <dl>
                                <dt>Freight</dt>
                                <dd>{{$order->freight}}</dd>
                                <dt>Number of Original</dt>
                                <dd>{{$order->original_no}}</dd>

                            </dl>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h4>  Remarks </h4> {{ $order->remarks }}
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <strong> Important </strong>
                    <ol>
                        <li>
                            Send us checking copy urgently- arwainternational@gmail.com

                        </li>

                    </ol>
                </div>
            </div>

            <div class="row">


            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection