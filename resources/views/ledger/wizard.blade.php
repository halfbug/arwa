@extends('layouts.admin')

@section('content')
    <style>
        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;

        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">General Ledger</h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="stepwizard">

        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Entity</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Column</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Filter</p>
            </div>
        </div>
    </div>
    <form role="form" method="post" action="{{url('ledger')}}" enctype="multipart/form-data">
        @csrf
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-8">
                    <h3>Select Entity</h3>
                    <div class="form-group">
                        <label class="control-label">Entity Name</label>
                        <select class="form-control" name="entity" required id="entity">
                            <option value="">Choose an option</option>
                            <option value="clients">Customers</option>
                            <option value="clients">Vendors</option>
                            <option value="sales_taxes">Sales Tax</option>
                            <option value="currency_exchanges">Currency Exchange</option>
                            <option value="ioperations">Internal Operations</option>
                            <option value="orders">Sales Order</option>

                        </select>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label class="control-label">Last Name</label>--}}
                        {{--<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />--}}
                    {{--</div>--}}
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-8">
                    <h3> Select Columns</h3>
                    <div class="form-group">
                        <label class="control-label">Columns</label>
                        <select class=" js-example-basic-multiple form-control" style="width:100%" name="fields[]" required id="fields" multiple>
                            <option value="">Choose an option</option>


                        </select>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label class="control-label">Company Address</label>--}}
                        {{--<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />--}}
                    {{--</div>--}}
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Apply Filter</h3>

                    <table id="myTable" class=" table order-list">
                        <thead>
                        <tr>
                            <td>Columns</td>
                            <td>Criteria</td>
                            <td>Value</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <select class="form-control" name="sfields_0" required id="sfields_0" >
                                    <option value="">Choose an option</option>


                                </select>
                            </td>
                            <td class="col-sm-4">
                                <select class="form-control" name="criteria_0" required id="criteria_0" >
                                    <option value="">Choose an option</option>


                                </select>
                            </td>
                            <td class="col-sm-3" id="row_0">
                                <input type="text" name="value_0"  class="form-control" id="value_0"/>
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>

                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: left;">
                                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        </tfoot>
                    </table>
                    <button class="btn btn-success btn-lg pull-right" type="submit">Load Ledger</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
<script>
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url'],select"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');

        // fields display
        var datajson = {"clients":["first_name","last_name","father_name","CNIC","NTN","gender","email","phone","postalcode","mobile","shipping_address","billing_address","country","city_state","company_name","company_phone","company_website","company_fax","company_address"],"orders":["shipper","consignee","notify_party","voyage_no","loading_at","discharge_at","delivery_at","marks_number","goods_description","gross_weight","measurement","containers_no","movement","freight","original_no","remarks","amount","date"],"currency_exchanges":["name","value","date"],"ioperations":["items","amount","date"],"sales_taxes":["client_id","value","date"]}

        $("#entity").on('change', function() {

            fillselectbox(datajson[$(this).val()],"fields");
        });
        $('.js-example-basic-multiple').select2();

//        Add row for filter
        var counter = 1;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select class="form-control" name="sfields_' + counter + '" required id="sfields_' + counter + '" ><option value="">Choose an option</option></select></td>';
            cols += '<td><select class="form-control" name="criteria_' + counter + '" required id="criteria_' + counter + '" ><option value="">Choose an option</option></select></td>';
            cols += '<td id="row_' + counter + '"><input type="text" class="form-control" name="value_' + counter + '"/></td>';

            cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="X"></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            fillselectbox($("#fields").val(),"sfields_"+counter);
            counter++;
        });



        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            counter -= 1
        });

//         populate columns
        $("#fields").on('change', function() {
            fillselectbox($(this).val(),"sfields_0");

        });

        //populate criteria
        var typejson ={"first_name":"string","last_name":"string","father_name":"string","cnic":"string","ntn":"string","gender":"string","email":"string","phone":"string","postalcode":"string","mobile":"string","country":"string","city_state":"string","company_name":"string","company_phone":"string","company_website":"string","company_fax":"string","company_address":"string","company_docs":"string","status":"number","updated_at":"date","shipper":"client","consignee":"client","notify_party":"client","voyage_no":"string","loading_at":"string","discharge_at":"string","delivery_at":"string","marks_number":"string","goods_description":"string","gross_weight":"string","measurement":"string","containers_no":"string","movement":"string","freight":"string","original_no":"string","remarks":"string","date":"date","name":"string","value":"string","items":"string","amount":"number","client_id":"client"};



//        $("[id^='sfields_']").change(function() {
        $(document).on('change', '[id^="sfields_"]', function (e) {

            var selectedf = $(this).val();

          var rid=$(this).attr('id').split("_");
            console.log(rid[1]);
            var dateselbox =['today','this_week','last_week','this_month','last_month','last_6months','last_year','range'];
            var stringselbox=['similar','not similar'];

            var numberselbox=['equal to', 'greater than','less than','not equal to'];
            console.log(selectedf);
            if(typejson[selectedf] == 'client')
            {
                fillselectbox(stringselbox ,"criteria_"+rid[1]);
                $("#row_"+rid[1]).html("");
                $("#row_"+rid[1]).html('<select class="form-control" name="value_' + rid[1] + '" required id="value_' + rid[1] + '" ><option value="">Choose an option</option></select>')
                $("#value_"+rid[1]).select2({
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
            }
            else
            fillselectbox(eval(typejson[selectedf]+ 'selbox') ,"criteria_"+rid[1]);

        });

    });

    function titleCase(str) {
        return str.toLowerCase().split(' ').map(x=>x[0].toUpperCase()+x.slice(1)).join(' ');
    }

    function fillselectbox(fieldz,elet) {
//        var fieldz = ;
        console.log("---->"+elet);
        $('#'+elet).html('');
        var optionString = '';
        $.each(fieldz, function(i, item) {

//            console.log(item);

            optionString += '<option id="'+ item+ '" value="' + item + '">' +titleCase(item.replace("_", " ")) + '</option>';
        });
        console.log(optionString);
       $('#'+elet).html(optionString);
    }

</script>
@endsection