<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        //redirect to admin profile page
        return view('admin.profile');
    }

    public function adminProfile()
    {
        //redirect to admin profile update page
        return view('admin.updateAdminProfile');
    }
    public function collecttorReg()
    {
        //redirec to collectore form page and this data function in AdminFunctionController
        return view('admin.collectorRegistation');
    }
    public function customerReg()
    {
        //redirect to user registaion page and this data function in AdminFunctionController
        return view('admin.customerRegistation');
    }
    public function dailyInfo()
    {
        //redirect to user dail createDailyInfo page 
        return view('admin.createDailyInfo');
    }
    public function collecDet()
    {
        //redirect to user dail createDailyInfo page 
        return view('admin.collectorDet');
    }
    
    public function customerDet()
    {
        //redirect to user dail createDailyInfo page 
        return view('admin.customerDet');
    }
}
    
