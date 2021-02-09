<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Models\User;

class AdminUpdateController extends Controller
{
   
    //Admin(user) data update here
    public function updateAdmin(Request $request){
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->tp = $request->input('tp');

        $user->save();
        return redirect()->action([HomeController::class, 'profile'])->with('alert_success','Update Successful !');
    }
    //Admin(user) profile pic update here
    public function adminpicUp(Request $request){
        
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        
        if($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/doc/images/profile/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;   
        }
        $user->save();
        return redirect()->action([HomeController::class, 'adminProfile'])->with('alert_success','Update Successful !');
    }



}
