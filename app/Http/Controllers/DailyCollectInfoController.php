<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyInfo;
use App\Models\Customer;
use App\Models\User;
use DB;

class DailyCollectInfoController extends Controller
{
    
    public function insertdailyInfo(Request $request){

        //dd($request->all());
        $custom = Customer::where('cusid', '=', $request->input('cusid'))->first();
        if ($custom === null) {
          // Customer does not exist
          return redirect()->action([HomeController::class, 'dailyInfo'])->with('alert_danger','Customer Does Not Exist !');
        } else {
        // Customer exits
        
        $request->validate ([
            'cusid' => ['required', 'string', 'max:255'],
            'numofkillo' => ['required', 'integer', 'max:100000'],
            'advance' => ['nullable','integer', 'max:100000000',],
        ]);
            //session user id
        $user = auth()->user();

            //select customer id according to cusid
        $cid = $request->input('cusid');  
        $cus = DB::table('customers')->where('cusid', $cid)->value('id');
        
        //Daily collection information 
    
        $dailyInfo = new DailyInfo;
        $dailyInfo->customer_id = $cus;
        $dailyInfo->numofkillo = $request->input('numofkillo');
        $dailyInfo->advance = $request->input('advance');
        $dailyInfo->admin_id = $user->id;
        $dailyInfo->save();
        return redirect()->action([HomeController::class, 'dailyInfo'])->with('alert_success','Data Recorded Successful !');
        }
        
    }

    public function autocomplete(Request $request)
    {
        /*
    	$cus_id = [];

        if($request->has('q')){
            $search = $request->q;
            $cus_id =Customer::select("cusid")
            		->where('cusid', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($cus_id);
        */
        $data = Customer::select("cusid")

        ->where("cusid","LIKE","%{$request->query}%")

        ->get();



        return response()->json($data);
    }

}
