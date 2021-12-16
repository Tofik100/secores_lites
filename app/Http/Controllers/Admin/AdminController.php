<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
// use App\Models\Role;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class AdminController extends Controller
{
    //Admin Dashboard 

     public function index(Request $request)
     {

        return view('admin.login');
     }

    //Resellers Dashboard 

    public function resellser(Request $request)
    {
        return view('resellers.reseller-dashboard');
    }

    //Add Resellers Dashboard 

    public function addResellser(Request $request)
    {
        $user = user::find(2);
        
        $user->assignRole('editor');
        return view('resellers.addresellers');
       
    }

    //SubResellers Dashboard 

     public function subReseller(Request $request)
     {
        
        return view('subresellers.subresellers-dashboard');
     }

     //Add Sub Resellers

     public function addsubResellser(Request $request)
    {
            $user = user::find(3);
            // return $user;
            $user->assignRole('publish');
            return view('subresellers.add-subresellser');
       
    }

    //User Dashboard 

    public function users(Request $request)
    {
        if(Auth::user() && Auth::user()->role_id == 4){

            return view('users.user');
        }
            return view('admin.login');
    }

    public function topbar()
    {
        
        return view('layouts.topbar');
    }

    public function dashboard(Request $request)
    {
        
             return view('admin.dashboard');
         
    }

    

    // login function

    

    // logout function

    public function logout(Request $request) {
        
        Auth::logout();
        Session::flush();
        return redirect('login')->with('logout', 'Goodbye!');
    }


    // Admin Login

    public function handleAdmin()
    {
        return view('login.dashboard');
    }

    public function role()
    {
        return view('admin.role');
    }

    public function permission()
    {
        return view('admin.permission');
    }

    
}
