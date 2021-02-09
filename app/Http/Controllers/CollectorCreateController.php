<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;


class CollectorCreateController extends Controller
{

    //collector data validate here
    public function collecterRegister(Request $request)
    {
        
        $request->validate ([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:1000'],
            'tp1' => ['required', 'Integer', 'min:10' ],
            'tp2' => ['nullable','Integer', 'min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
    //Collector data input to collector colum in db
    
        $collector = new Collector;
        $collector->fname = $request->input('fname');
        $collector->lname = $request->input('lname');
        $collector->email = $request->input('email');
        $collector->address = $request->input('address');
        $collector->tp1 = $request->input('tp1');
        $collector->tp2 = $request->input('tp2');
        $collector->password = Hash::make($request->input('password'));
        $collector->save();
        return redirect()->action([HomeController::class, 'collecttorReg'])->with('alert_success','Data Recorded Successful !');
    
        }
        //return collector value to table
        public function collectDet(){
            $collector = DB::select('select * from collectors');
            return view('admin.collectorDet',['collector'=>$collector]);
        }

        //delete customer details
        public function collectorDelete($id){
            $data = Collector::find($id);
            $data->delete();
            return redirect('collectorDet')->with('alert_success','Data Delete Successful !');
        }

        public function collectorEdit($id){
            $data = Collector::find($id);
            return view('admin.collectorUpdate',['data'=>$data]);
        }

        public function collectorUpdate(Request $request)
        //Update collector details
    {
        
        $request->validate ([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:1000'],
            'tp1' => ['required', 'Integer', 'min:10' ],
            'tp2' => ['nullable','Integer', 'min:10'],
        ]);
    
    //Collector data input to collector colum in db
    
        $collector = new Collector;
        $collector->fname = $request->input('fname');
        $collector->lname = $request->input('lname');
        $collector->email = $request->input('email');
        $collector->address = $request->input('address');
        $collector->tp1 = $request->input('tp1');
        $collector->tp2 = $request->input('tp2');
        $collector->save();
        return redirect('collectorDet')->with('alert_success','Data Update Successful !');
    
        }
}
