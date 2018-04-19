@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Import Invoice</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form method="post" action="{{route('importinvoice.store')}}" enctype="multipart/form-data">
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
									<label><b>Select C/F Agent</b></label>

									<select name="cf_agent_id" class="form-control">
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>
									</div>
								<div class="form-group">
									<label><b>Select Sub C/F Agent</b></label>

									<select name="cf_sub_agent_id" class="form-control">
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>

								</div>
								<div class="form-group">
									<label><b>Select Consignee</b></label>

									<select name="consignee_id" class="form-control">
                                    @foreach($clients as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->company_name }}</option>
                                    @endforeach
									</select>

								</div>
                                <div class="form-group">
                                    <label >type</label>
									<select name="type" class="form-control">
                                    <option value="Bill of Entry">Bill of Entry</option>
                                    <option value="Bill of Export">Bill of Export</option>
                                    <option value="Baggage Declaration">Baggage Declaration</option>
                                    <option value="Transshipment Permit">Transshipment Permit</option>
									</select>
                                </div>

                                <div class="form-group">
                                    <label>customfileno</label>
                                    <input class="form-control" id="customfileno" placeholder="" name="customfileno">

                                </div>
                                 <div class="form-group">
                                    <label >declaration_type</label>
                                    <input class="form-control" id="declaration_type" placeholder="" name="declaration_type">
                                </div>
                                <div class="form-group">
                                    <label>valuation_method</label>
                                    <input class="form-control" placeholder="Enter text" name="valuation_method">
                                </div>
                                <div class="form-group">
                                    <label>prev_ref</label>
                                    <input class="form-control" placeholder="Enter text" name="prev_ref">
                                </div>
                                <div class="form-group">
                                    <label>custom_ofc</label>
                                    <input class="form-control" placeholder="Enter text" name="custom_ofc">
                                </div>
                                <div class="form-group">
                                    <label>bankcode</label>
                                    <input class="form-control" placeholder="Enter text" name="bankcode">
                                </div>
                                <div class="form-group">
                                    <label>igm_egm_no</label>
                                    <input class="form-control" placeholder="Enter text" name="igm_egm_no">
                                    <label>igm_egm_index</label>
                                    <input class="form-control" placeholder="Enter text" name="igm_egm_index">
                                    <label>igm_egm_date</label>
                                    <input class="form-control" placeholder="Enter text" id="date2" name="igm_egm_date">
                                </div>
                                <div class="form-group">
                                    <label>dry_port_igm_egm</label>
                                    <input class="form-control" placeholder="Enter text" name="dry_port_igm_egm">
                                    <label>dry_port_igm_egm_index</label>
                                    <input class="form-control" placeholder="Enter text" name="dry_port_igm_egm_index">
                                    <label>dry_port_igm_egm_date</label>
                                    <input id="date1" class="form-control" placeholder="Enter text" name="dry_port_igm_egm_date">
                                </div>
                                <div class="form-group">
                                    <label>declarant</label>
                                    <input class="form-control" placeholder="Enter text" name="declarant" id="declarant">
                                </div>
                                <div class="form-group">
                                    <label>telephone</label>
                                    <input class="form-control" placeholder="Enter text" name="telephone">
                                    <label>job_no</label>
                                    <input class="form-control" placeholder="Enter text" name="job_no">

                                </div>

                                <div class="form-group">
                                    <label >NTN</label>
                                    <input class="form-control" placeholder="" name="NTN">
                                </div>
                                <div class="form-group">
                                    <label >STRno_passport_n_date</label>
                                    <input class="form-control" placeholder="" name="STRno_passport_n_date">
                                </div>
                                <div class="form-group">
                                    <label >warehouse_lic_no</label>
                                    <input class="form-control" placeholder="" name="warehouse_lic_no">
                                </div>
                                <div class="form-group">
                                    <label >transaction_type</label>
                                    <input class="form-control" placeholder="" name="transaction_type">
                                </div>
                                <div class="form-group">
                                    <label >lc_dd_no_date</label>
                                    <input class="form-control" placeholder="" name="lc_dd_no_date">
                                </div>
                                <div class="form-group">
                                    <label >country_destination</label>
                                    <input class="form-control" placeholder="" name="country_destination">
                                </div>
                                <div class="form-group">
                                    <label >curr_name_code</label>
                                    <input class="form-control" placeholder="" name="curr_name_code">
                                </div>
                                <div class="form-group">
                                    <label >vessel_mode_of_transport</label>
                                    <input class="form-control" placeholder="" name="vessel_mode_of_transport">
                                </div>
                                <div class="form-group">
                                    <label >bl_awl_con_no_date</label>
                                    <input class="form-control" placeholder="" name="bl_awl_con_no_date">
                                </div>
                                <div class="form-group">
                                    <label >exchangerate</label>
                                    <input class="form-control" placeholder="" name="exchangerate">
                                </div>
                                <div class="form-group">
                                    <label >portofshipment</label>
                                    <input class="form-control" placeholder="" name="portofshipment">
                                </div>
                                <div class="form-group">
                                    <label >portofdischarge</label>
                                    <input class="form-control" placeholder="" name="portofdischarge">
                                </div>
                                <div class="form-group">
                                    <label >placeofdelivery</label>
                                    <input class="form-control" placeholder="" name="placeofdelivery">
                                </div>
                                <div class="form-group">
                                    <label >deliveryterms</label>
                                    <input class="form-control" placeholder="" name="deliveryterms">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >marks_container_no</label>
                                    <input class="form-control" placeholder="" name="marks_container_no">
                                </div>
                                <div class="form-group">
                                    <label >no_of_package</label>
                                    <input class="form-control" placeholder="" name="no_of_package">
                                </div>
                                <div class="form-group">
                                    <label >package_type</label>
                                    <input class="form-control" placeholder="" name="package_type">
                                </div>
                                <div class="form-group">
                                    <label >gross weight</label>
                                    <input class="form-control" placeholder="" name="groswt">
                                </div>
                                <div class="form-group">
                                    <label >net weight</label>
                                    <input class="form-control" placeholder="" name="netwt">
                                </div>
                                <div class="form-group">
                                    <label >volume</label>
                                    <input class="form-control" placeholder="" name="volume">
                                </div>
                                <div class="form-group">
                                    <label >itemno</label>
                                    <input class="form-control" placeholder="" name="itemno">
                                </div>
                                <div class="form-group">
                                    <label >quantity_unit</label>
                                    <input class="form-control" placeholder="" name="quantity_unit">
                                </div>
                                <div class="form-group">
                                    <label >no_of_unit</label>
                                    <input class="form-control" placeholder="" name="no_of_unit">
                                </div>
                                <div class="form-group">
                                    <label >CO_code</label>
                                    <input class="form-control" placeholder="" name="CO_code">
                                </div>
                                <div class="form-group">
                                    <label >sro_no</label>
                                    <input class="form-control" placeholder="" name="sro_no">
                                </div>
                                <div class="form-group">
                                    <label >hscode</label>
                                    <input class="form-control" placeholder="" name="hscode">
                                </div>
                                 <div class="form-group">
                                    <label>items_desc</label>
                                    <textarea class="form-control" rows="2" style="height: 60px"  name="items_desc" id=""></textarea>
                                </div>
                               <div class="form-group">
                                    <label >levy</label>
                                    <input class="form-control" placeholder="" name="levy">
                                </div>
                                <div class="form-group">
                                    <label >rate</label>
                                    <input class="form-control" placeholder="" name="rate">
                                </div>
                                <div class="form-group">
                                    <label >sumpayable_pkr</label>
                                    <input class="form-control" placeholder="" name="sumpayable_pkr">
                                </div>
                                <div class="form-group">
                                    <label >unitvalue_declared</label>
                                    <input class="form-control" placeholder="" name="unitvalue_declared">
                                </div>
                                <div class="form-group">
                                    <label >unitvalue_assessed</label>
                                    <input class="form-control" placeholder="" name="unitvalue_assessed">
                                </div>
                                <div class="form-group">
                                    <label >totalvalue_declared</label>
                                    <input class="form-control" placeholder="" name="totalvalue_declared">
                                </div>
                                <div class="form-group">
                                    <label >totalvalue_assessed</label>
                                    <input class="form-control" placeholder="" name="totalvalue_assessed">
                                </div>
                                <div class="form-group">
                                    <label >customvalue_declared_pkr</label>
                                    <input class="form-control" placeholder="" name="customvalue_declared_pkr">
                                </div>
                                <div class="form-group">
                                    <label >customvalue_assessed_pkr</label>
                                    <input class="form-control" placeholder="" name="customvalue_assessed_pkr">
                                </div>
                                <div class="form-group">
                                    <label>sro_test_report_no_date</label>
                                    <textarea class="form-control" rows="2" style="height: 50px"  name="sro_test_report_no_date" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >fobvalue</label>
                                    <input class="form-control" placeholder="" name="fobvalue">
                                </div>
                                <div class="form-group">
                                    <label >freight</label>
                                    <input class="form-control" placeholder="" name="freight">
                                </div>
                                <div class="form-group">
                                    <label >cfrvalue</label>
                                    <input class="form-control" placeholder="" name="cfrvalue">
                                </div>
                                <div class="form-group">
                                    <label >insurance</label>
                                    <input class="form-control" placeholder="" name="insurance">
                                </div>
                                <div class="form-group">
                                    <label >landingcharges_on_1perc</label>
                                    <input class="form-control" placeholder="" name="landingcharges_on_1perc">
                                </div>
                                <div class="form-group">
                                    <label >othercharges</label>
                                    <input class="form-control" placeholder="" name="othercharges">
                                </div>
                                <div class="form-group">
                                    <label >assessedval_pkr</label>
                                    <input class="form-control" placeholder="" name="assessedval_pkr">
                                </div>
                                <div class="form-group">
                                    <label >total_claim_pkr</label>
                                    <input class="form-control" placeholder="" name="total_claim_pkr">
                                </div>
                                <div class="form-group">
                                    <label>machineno_date</label>
                                    <textarea class="form-control" rows="2" style="height: 60px"  name="machineno_date" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>rev_recover</label>
                                    <textarea class="form-control" rows="2" style="height: 60px"  name="rev_recover" id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label >amount</label>
                                    <input class="form-control" placeholder="" name="amount">
                                </div>
                                <div class="form-group">
                                    <label >totalamount</label>
                                    <input class="form-control" placeholder="totalamount" name="totalamount">
                                </div>
                                <div class="form-group">
                                    <label>cfo_no_date</label>
                                    <textarea class="form-control" rows="2" style="height: 60px"  name="cfo_no_date" id=""></textarea>
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
        height: 50,
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
        $('#date1').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $('#date2').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        </script>
@endsection