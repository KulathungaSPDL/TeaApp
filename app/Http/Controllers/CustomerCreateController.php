<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

class CustomerCreateController extends Controller
{
    public function customerRegister(Request $request)
    {
    
        $request->validate ([
            'name' => ['required', 'string', 'max:255'],
            'cusid' => ['required', 'string', 'max:255', 'unique:customers'],
            'address' => ['nullable','string', 'max:1000'],
            'tp' => ['nullable','Integer', 'min:10' ],
        ]);
    
    //Collector data input to collector colum in db
    
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->cusid = $request->input('cusid');
        $customer->address = $request->input('address');
        $customer->tp = $request->input('tp');
        $customer->save();
        return redirect()->action([HomeController::class, 'customerReg'])->with('alert_success','Data Recorded Successful !');
        }
        //return customer table to table
        public function customerDet(){
            $customer = DB::select('select * from customers');
            return view('admin.customerDet',['customer'=>$customer]);
        }
        //delete customer details
        public function customerDelete($id){
            $data = Customer::find($id);
            $data->delete();
            return redirect('customerDet')->with('alert_success','Data Delete Successful !');
        }

        public function customerEdit($id){
            $data = Customer::find($id);
            return view('admin.customerUpdate',['data'=>$data]);
        }

        public function customerUpdate(Request $request)
    {
    
        $request->validate ([
            'name' => ['required', 'string', 'max:255'],
            'cusid' => ['required', 'string', 'max:255', 'unique:customers'],
            'address' => ['nullable','string', 'max:1000'],
            'tp' => ['nullable','Integer', 'min:10' ],
        ]);
    
    //Collector data input to collector colum in db
    
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->cusid = $request->input('cusid');
        $customer->address = $request->input('address');
        $customer->tp = $request->input('tp');
        $customer->save();
        return redirect('customerDet')->with('alert_success','Data Update Successful !');
        }
        
}


