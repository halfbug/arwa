<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LedgerController extends Controller
{
    public function index()
    {

        return view('ledger.wizard');
    }

//    public function show()
//    {
//        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("clients");
//        $columns1 = \DB::connection()->getSchemaBuilder()->getColumnListing("orders");
//        $columns2 = \DB::connection()->getSchemaBuilder()->getColumnListing("currency_exchanges");
//        $columns3 = \DB::connection()->getSchemaBuilder()->getColumnListing("ioperations");
//        $columns4 = \DB::connection()->getSchemaBuilder()->getColumnListing("sales_taxes");
//
//
////        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("clients");
////        $model= new \App\Client();
//        $arr['customers'] = $columns;
//        $arr['orders']=$columns1;
//        $arr['currency_exchanges']=$columns2;
//        $arr['ioperations']=$columns3;
//        $arr['sales_taxes']=$columns4;
//        return response()->json($arr);
////        return view('ledger.wizard');
//    }

public  function  show(){

    $tables = array('clients','orders','currency_exchanges','ioperations','sales_taxes');
    $tbl=array();
    foreach($tables as $table){
        $table_info_columns = \DB::select( \DB::raw('SHOW COLUMNS FROM `'.$table.'`'));

        foreach($table_info_columns as $column){
            if(str_contains($column->Type,'varchar'))
            $tbl[$column->Field]='string';
            elseif(str_contains($column->Field,'date'))
                $tbl[$column->Field]='date';
            elseif(str_contains($column->Type,'int'))
                $tbl[$column->Field]='number';


//            var_dump($col_name,$col_type);
        }
    }
    return response()->json($tbl);
}


    public function load(Request $request)
    {

        $qvar = $request->all();
//        dd($qvar) ;
        $query = \DB::table($qvar['entity'])
            ->select(implode(',',$qvar['fields']));

//        ->where('company_name','LIKE',"%$search%")
//            ->get();
         $count = 0;
        while (isset($qvar["sfields_".$count])){



            switch ($qvar["criteria_"+$count]) {
                case "similar":
                    $query->where($qvar["sfields_".$count],'LIKE',"%".$qvar["value_".$count]."%");
                    break;
                case "not similar":
                case 'not equal to':
                $query->where($qvar["sfields_".$count],'<>',$qvar["value_".$count]);
                    break;
                case "equal to":
                    $query->where($qvar["sfields_".$count],'=',$qvar["value_".$count]);
                    break;
                case "greater than":
                    $query->where($qvar["sfields_".$count],'>',$qvar["value_".$count]);
                    break;
                case "less than":
                    $query->where($qvar["sfields_".$count],'<',$qvar["value_".$count]);
                    break;
                case "today":
                   $query->where($qvar["sfields_".$count],'=',strtotime(date('Y-m-d ')));
                    break;
                case "this_week":
                    echo "Your favorite color is green!";
                    break;
                case "equal to":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
                $count++;
        }

        return redirect()->route('sales-tax.index')
            ->with('success','Sales Tax  has been added successfully.');
    }
}
