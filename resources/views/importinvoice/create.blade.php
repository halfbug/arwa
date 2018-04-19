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
                                    <label>salestax_reg_no</label>
                                    <input class="form-control" id="salestax_reg_no" placeholder="" name="salestax_reg_no">

                                </div>
                                 <div class="form-group">
                                    <label >invoice num</label>
                                    <input class="form-control" id="invoice_no" placeholder="" name="invoice_no">
                                </div>
                                <div class="form-group">
                                    <label>Invoice date</label>
                                    <input class="form-control" placeholder="Enter text" id="date1" name="invoice_date">
                                </div>
                                <div class="form-group">
                                    <label>ref_no</label>
                                    <input class="form-control" placeholder="Enter text" name="ref_no">
                                </div>
                                <div class="form-group">
                                    <label>exchangerate</label>
                                    <input class="form-control" placeholder="Enter text" name="exchangerate">
                                </div>
                                <div class="form-group">
                                    <label>bl_no</label>
                                    <input class="form-control" placeholder="Enter text" name="bl_no">
                                </div>
                                <div class="form-group">
                                    <label>ntn_no</label>
                                    <input class="form-control" placeholder="Enter text" name="ntn_no">
                                    <label>salestax_no</label>
                                    <input class="form-control" placeholder="Enter text" name="salestax_no">
                                    <label>tax_counter_no</label>
                                    <input class="form-control" placeholder="Enter text" name="tax_counter_no">
                                </div>
                                <div class="form-group">
                                    <label>vesselname</label>
                                    <input class="form-control" placeholder="Enter text" name="vesselname">
                                    <label>voyage_no</label>
                                    <input class="form-control" placeholder="Enter text" name="voyage_no">
                                    <label>vir_no</label>
                                    <input id="date1" class="form-control" placeholder="Enter text" name="vir_no">
                                </div>
                                <div class="form-group">
                                    <label >container_no</label>
                                    <input class="form-control" placeholder="" name="container_no">
                                    <label >container_size</label>
                                    <input class="form-control" placeholder="" name="container_size">
                                    <label >container_demurragedate</label>
                                    <input class="form-control" placeholder="" name="container_demurragedate">
                                    <label >container_demurrageupto</label>
                                    <input class="form-control" placeholder="" name="container_demurrageupto">
                                    <label >container_status</label>
                                    <input class="form-control" placeholder="" name="container_status">
                                    <label >container_releasedt</label>
                                    <input class="form-control" placeholder="" name="container_releasedt">
                                    <label >container_no_ofdays</label>
                                    <input class="form-control" placeholder="" name="container_no_ofdays">
                                    <label >container_machineno</label>
                                    <input class="form-control" placeholder="" name="container_machineno">
                                </div>
                                <div class="form-group">
                                    <label >totalval_ex_stax_fed</label>
                                    <input class="form-control" placeholder="" name="totalval_ex_stax_fed">
                                </div>
                                <div class="form-group">
                                    <label >provisional sales tax</label>
                                    <input class="form-control" placeholder="" name="prov_sales_tax">
                                </div>
                                <div class="form-group">
                                    <label >Total invoice amount</label>
                                    <input class="form-control" placeholder="" name="totalinvoiceamount">
                                </div>
                                <div class="form-group">
                                    <label >Receipt No.</label>
                                    <input class="form-control" placeholder="" name="receiptno">
                                </div>
                                <div class="form-group">
                                    <label >Receipt date</label>
                                    <input class="form-control" placeholder="" name="receiptno">
                                </div>
                                <div class="form-group">
                                    <label >Demurrage Charges</label>
                                    <input class="form-control" placeholder="demurrage_charges_paid_at" name="demurrage_charges_paid_at">
                                    <input class="form-control" placeholder="demurrage_charges_20" name="demurrage_charges_20">
                                    <input class="form-control" placeholder="demurrage_charges_40" name="demurrage_charges_40">
                                    <input class="form-control" placeholder="demurrage_charges_45" name="demurrage_charges_45">
                                    <input class="form-control" placeholder="demurrage_charges_amount_usd" name="demurrage_charges_amount_usd">
                                    <input class="form-control" placeholder="demurrage_charges_amount_pkr" name="demurrage_charges_amount_pkr">
                                    <input class="form-control" placeholder="demurrage_charges_discount_amount" name="demurrage_charges_discount_amount">
                                    <input class="form-control" placeholder="demurrage_charges_value_excld" name="demurrage_charges_value_excld">
                                    <input class="form-control" placeholder="demurrage_charges_ST_n_fed" name="demurrage_charges_ST_n_fed">
                                    <input class="form-control" placeholder="demurrage_charges_provisionalsalestaxamount" name="demurrage_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="demurrage_charges_value_inc_tax" name="demurrage_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Storage Charges</label>
                                    <input class="form-control" placeholder="storage_charges_paid_at" name="storage_charges_paid_at">
                                    <input class="form-control" placeholder="storage_charges_20" name="storage_charges_20">
                                    <input class="form-control" placeholder="storage_charges_40" name="storage_charges_40">
                                    <input class="form-control" placeholder="storage_charges_45" name="storage_charges_45">
                                    <input class="form-control" placeholder="storage_charges_amount_usd" name="storage_charges_amount_usd">
                                    <input class="form-control" placeholder="storage_charges_amount_pkr" name="storage_charges_amount_pkr">
                                    <input class="form-control" placeholder="storage_charges_discount_amount" name="storage_charges_discount_amount">
                                    <input class="form-control" placeholder="storage_charges_value_excld" name="storage_charges_value_excld">
                                    <input class="form-control" placeholder="storage_charges_ST_n_fed" name="storage_charges_ST_n_fed">
                                    <input class="form-control" placeholder="storage_charges_provisionalsalestaxamount" name="storage_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="storage_charges_value_inc_tax" name="storage_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Wharfage Charges</label>
                                    <input class="form-control" placeholder="wharfage_charges_paid_at" name="wharfage_charges_paid_at">
                                    <input class="form-control" placeholder="wharfage_charges_20" name="wharfage_charges_20">
                                    <input class="form-control" placeholder="wharfage_charges_40" name="wharfage_charges_40">
                                    <input class="form-control" placeholder="wharfage_charges_45" name="wharfage_charges_45">
                                    <input class="form-control" placeholder="wharfage_charges_amount_usd" name="wharfage_charges_amount_usd">
                                    <input class="form-control" placeholder="wharfage_charges_amount_pkr" name="wharfage_charges_amount_pkr">
                                    <input class="form-control" placeholder="wharfage_charges_discount_amount" name="wharfage_charges_discount_amount">
                                    <input class="form-control" placeholder="wharfage_charges_value_excld" name="wharfage_charges_value_excld">
                                    <input class="form-control" placeholder="wharfage_charges_ST_n_fed" name="wharfage_charges_ST_n_fed">
                                    <input class="form-control" placeholder="wharfage_charges_provisionalsalestaxamount" name="wharfage_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="wharfage_charges_value_inc_tax" name="wharfage_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Terminal Service Charges</label>
                                    <input class="form-control" placeholder="terminalservice_paid_at" name="terminalservice_paid_at">
                                    <input class="form-control" placeholder="terminalservice_20" name="terminalservice_20">
                                    <input class="form-control" placeholder="terminalservice_40" name="terminalservice_40">
                                    <input class="form-control" placeholder="terminalservice_45" name="terminalservice_45">
                                    <input class="form-control" placeholder="terminalservice_amount_usd" name="terminalservice_amount_usd">
                                    <input class="form-control" placeholder="terminalservice_amount_pkr" name="terminalservice_amount_pkr">
                                    <input class="form-control" placeholder="terminalservice_discount_amount" name="terminalservice_discount_amount">
                                    <input class="form-control" placeholder="terminalservice_value_excld" name="terminalservice_value_excld">
                                    <input class="form-control" placeholder="terminalservice_ST_n_fed" name="terminalservice_ST_n_fed">
                                    <input class="form-control" placeholder="terminalservice_provisionalsalestaxamount" name="terminalservice_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="terminalservice_value_inc_tax" name="terminalservice_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Documents Charges</label>
                                    <input class="form-control" placeholder="docs_charges_paid_at" name="docs_charges_paid_at">
                                    <input class="form-control" placeholder="docs_charges_20" name="docs_charges_20">
                                    <input class="form-control" placeholder="docs_charges_40" name="docs_charges_40">
                                    <input class="form-control" placeholder="docs_charges_45" name="docs_charges_45">
                                    <input class="form-control" placeholder="docs_charges_amount_usd" name="docs_charges_amount_usd">
                                    <input class="form-control" placeholder="docs_charges_amount_pkr" name="docs_charges_amount_pkr">
                                    <input class="form-control" placeholder="docs_charges_discount_amount" name="docs_charges_discount_amount">
                                    <input class="form-control" placeholder="docs_charges_value_excld" name="docs_charges_value_excld">
                                    <input class="form-control" placeholder="docs_charges_ST_n_fed" name="docs_charges_ST_n_fed">
                                    <input class="form-control" placeholder="docs_charges_provisionalsalestaxamount" name="docs_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="docs_charges_value_inc_tax" name="docs_charges_value_inc_tax">
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >Truck In Charges</label>
                                    <input class="form-control" placeholder="truck_in_charges_paid_at" name="truck_in_charges_paid_at">
                                    <input class="form-control" placeholder="truck_in_charges_20" name="truck_in_charges_20">
                                    <input class="form-control" placeholder="truck_in_charges_40" name="truck_in_charges_40">
                                    <input class="form-control" placeholder="truck_in_charges_45" name="truck_in_charges_45">
                                    <input class="form-control" placeholder="truck_in_charges_amount_usd" name="truck_in_charges_amount_usd">
                                    <input class="form-control" placeholder="truck_in_charges_amount_pkr" name="truck_in_charges_amount_pkr">
                                    <input class="form-control" placeholder="truck_in_charges_discount_amount" name="truck_in_charges_discount_amount">
                                    <input class="form-control" placeholder="truck_in_charges_value_excld" name="truck_in_charges_value_excld">
                                    <input class="form-control" placeholder="truck_in_charges_ST_n_fed" name="truck_in_charges_ST_n_fed">
                                    <input class="form-control" placeholder="truck_in_charges_provisionalsalestaxamount" name="truck_in_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="truck_in_charges_value_inc_tax" name="truck_in_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Scanner Infastructure Charges</label>
                                    <input class="form-control" placeholder="scanner_infstrc_charges_paid_at" name="scanner_infstrc_charges_paid_at">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_20" name="scanner_infstrc_charges_20">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_40" name="scanner_infstrc_charges_40">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_45" name="scanner_infstrc_charges_45">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_amount_usd" name="scanner_infstrc_charges_amount_usd">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_amount_pkr" name="scanner_infstrc_charges_amount_pkr">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_discount_amount" name="scanner_infstrc_charges_discount_amount">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_value_excld" name="scanner_infstrc_charges_value_excld">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_ST_n_fed" name="scanner_infstrc_charges_ST_n_fed">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_provisionalsalestaxamount" name="scanner_infstrc_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="scanner_infstrc_charges_value_inc_tax" name="scanner_infstrc_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Fuel Surcharge Charges</label>
                                    <input class="form-control" placeholder="fuelsurcharge_charges_paid_at" name="fuelsurcharge_charges_paid_at">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_20" name="fuelsurcharge_charges_20">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_40" name="fuelsurcharge_charges_40">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_45" name="fuelsurcharge_charges_45">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_amount_usd" name="fuelsurcharge_charges_amount_usd">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_amount_pkr" name="fuelsurcharge_charges_amount_pkr">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_discount_amount" name="fuelsurcharge_charges_discount_amount">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_value_excld" name="fuelsurcharge_charges_value_excld">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_ST_n_fed" name="fuelsurcharge_charges_ST_n_fed">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_provisionalsalestaxamount" name="fuelsurcharge_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="fuelsurcharge_charges_value_inc_tax" name="fuelsurcharge_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Data Processing Charges</label>
                                    <input class="form-control" placeholder="datapro_charges_paid_at" name="datapro_charges_paid_at">
                                    <input class="form-control" placeholder="datapro_charges_20" name="datapro_charges_20">
                                    <input class="form-control" placeholder="datapro_charges_40" name="datapro_charges_40">
                                    <input class="form-control" placeholder="datapro_charges_45" name="datapro_charges_45">
                                    <input class="form-control" placeholder="datapro_charges_amount_usd" name="datapro_charges_amount_usd">
                                    <input class="form-control" placeholder="datapro_charges_amount_pkr" name="datapro_charges_amount_pkr">
                                    <input class="form-control" placeholder="datapro_charges_discount_amount" name="datapro_charges_discount_amount">
                                    <input class="form-control" placeholder="datapro_charges_value_excld" name="datapro_charges_value_excld">
                                    <input class="form-control" placeholder="datapro_charges_ST_n_fed" name="datapro_charges_ST_n_fed">
                                    <input class="form-control" placeholder="datapro_charges_provisionalsalestaxamount" name="datapro_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="datapro_charges_value_inc_tax" name="datapro_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Scanning Examination Charges</label>
                                    <input class="form-control" placeholder="scanning_exm_charges_paid_at" name="scanning_exm_charges_paid_at">
                                    <input class="form-control" placeholder="scanning_exm_charges_20" name="scanning_exm_charges_20">
                                    <input class="form-control" placeholder="scanning_exm_charges_40" name="scanning_exm_charges_40">
                                    <input class="form-control" placeholder="scanning_exm_charges_45" name="scanning_exm_charges_45">
                                    <input class="form-control" placeholder="scanning_exm_charges_amount_usd" name="scanning_exm_charges_amount_usd">
                                    <input class="form-control" placeholder="scanning_exm_charges_amount_pkr" name="scanning_exm_charges_amount_pkr">
                                    <input class="form-control" placeholder="scanning_exm_charges_discount_amount" name="scanning_exm_charges_discount_amount">
                                    <input class="form-control" placeholder="scanning_exm_charges_value_excld" name="scanning_exm_charges_value_excld">
                                    <input class="form-control" placeholder="scanning_exm_charges_ST_n_fed" name="scanning_exm_charges_ST_n_fed">
                                    <input class="form-control" placeholder="scanning_exm_charges_provisionalsalestaxamount" name="scanning_exm_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="scanning_exm_charges_value_inc_tax" name="scanning_exm_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Custom Seal Charges</label>
                                    <input class="form-control" placeholder="custom_seal_charges_paid_at" name="custom_seal_charges_paid_at">
                                    <input class="form-control" placeholder="custom_seal_charges_20" name="custom_seal_charges_20">
                                    <input class="form-control" placeholder="custom_seal_charges_40" name="custom_seal_charges_40">
                                    <input class="form-control" placeholder="custom_seal_charges_45" name="custom_seal_charges_45">
                                    <input class="form-control" placeholder="custom_seal_charges_amount_usd" name="custom_seal_charges_amount_usd">
                                    <input class="form-control" placeholder="custom_seal_charges_amount_pkr" name="custom_seal_charges_amount_pkr">
                                    <input class="form-control" placeholder="custom_seal_charges_discount_amount" name="custom_seal_charges_discount_amount">
                                    <input class="form-control" placeholder="custom_seal_charges_value_excld" name="custom_seal_charges_value_excld">
                                    <input class="form-control" placeholder="custom_seal_charges_ST_n_fed" name="custom_seal_charges_ST_n_fed">
                                    <input class="form-control" placeholder="custom_seal_charges_provisionalsalestaxamount" name="custom_seal_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="custom_seal_charges_value_inc_tax" name="custom_seal_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Survey Charges</label>
                                    <input class="form-control" placeholder="survey_charges_paid_at" name="survey_charges_paid_at">
                                    <input class="form-control" placeholder="survey_charges_20" name="survey_charges_20">
                                    <input class="form-control" placeholder="survey_charges_40" name="survey_charges_40">
                                    <input class="form-control" placeholder="survey_charges_45" name="survey_charges_45">
                                    <input class="form-control" placeholder="survey_charges_amount_usd" name="survey_charges_amount_usd">
                                    <input class="form-control" placeholder="survey_charges_amount_pkr" name="survey_charges_amount_pkr">
                                    <input class="form-control" placeholder="survey_charges_discount_amount" name="survey_charges_discount_amount">
                                    <input class="form-control" placeholder="survey_charges_value_excld" name="survey_charges_value_excld">
                                    <input class="form-control" placeholder="survey_charges_ST_n_fed" name="survey_charges_ST_n_fed">
                                    <input class="form-control" placeholder="survey_charges_provisionalsalestaxamount" name="survey_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="survey_charges_value_inc_tax" name="survey_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Bullet Seal Affixing</label>
                                    <input class="form-control" placeholder="bulletseal_affix_charges_paid_at" name="bulletseal_affix_charges_paid_at">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_20" name="bulletseal_affix_charges_20">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_40" name="bulletseal_affix_charges_40">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_45" name="bulletseal_affix_charges_45">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_amount_usd" name="bulletseal_affix_charges_amount_usd">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_amount_pkr" name="bulletseal_affix_charges_amount_pkr">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_discount_amount" name="bulletseal_affix_charges_discount_amount">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_value_excld" name="bulletseal_affix_charges_value_excld">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_ST_n_fed" name="bulletseal_affix_charges_ST_n_fed">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_provisionalsalestaxamount" name="bulletseal_affix_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="bulletseal_affix_charges_value_inc_tax" name="bulletseal_affix_charges_value_inc_tax">
                                </div>
                                <div class="form-group">
                                    <label >Weighment Charges</label>
                                    <input class="form-control" placeholder="weighment_charges_paid_at" name="weighment_charges_paid_at">
                                    <input class="form-control" placeholder="weighment_charges_20" name="weighment_charges_20">
                                    <input class="form-control" placeholder="weighment_charges_40" name="weighment_charges_40">
                                    <input class="form-control" placeholder="weighment_charges_45" name="weighment_charges_45">
                                    <input class="form-control" placeholder="weighment_charges_amount_usd" name="weighment_charges_amount_usd">
                                    <input class="form-control" placeholder="weighment_charges_amount_pkr" name="weighment_charges_amount_pkr">
                                    <input class="form-control" placeholder="weighment_charges_discount_amount" name="weighment_charges_discount_amount">
                                    <input class="form-control" placeholder="weighment_charges_value_excld" name="weighment_charges_value_excld">
                                    <input class="form-control" placeholder="weighment_charges_ST_n_fed" name="weighment_charges_ST_n_fed">
                                    <input class="form-control" placeholder="weighment_charges_provisionalsalestaxamount" name="weighment_charges_provisionalsalestaxamount">
                                    <input class="form-control" placeholder="weighment_charges_value_inc_tax" name="weighment_charges_value_inc_tax">
                                </div>


							</div><!-- /.2nd col  -->


							</div>
                        <!-- /.row (nested) -->
						

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
        </script>
@endsection