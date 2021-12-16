<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class LoginControllers extends Controller
{

    public function login()
    {   
        // if(Auth::guest())
        //  {
        //      redirect()->route('login');
        //  }
            return view('admin.login');
    }

    //Admin Login roll id wise

    public function customLogin(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        

         $credentials = $request->only('email', 'password');

         if (Auth::attempt($credentials)) 
         {
            if(Auth::user()->role_id == 1){

                

                $data  = $request->input();
                // dd($data);
                return redirect()->route('dashboard')
                ->with( 'message', 'Welcome To Dashboard' ,$request->session()->put('user',$data['email']));
                // return redirect('admin/dashboard');
            
            }
            if(Auth::user()->role_id == 2){
                
                $data  = $request->input();
                return redirect()->route('resellser/dashboard')
                ->with( 'message', 'Welcome To Dashboard' ,$request->session()->put('user',$data['email']));
                //  return  redirect('resellser/dashboard');
            }
             if(Auth::user()->role_id == 3){
                
                 $data  = $request->input();
                 return redirect()->route('subresellers/dashboard')
                 ->with( 'message', 'Welcome To Dashboard' ,$request->session()->put('user',$data['email']));
                //   return  redirect('subresellers/dashboard');
             }

            // if(Auth::user()->role_id == 4){
            //     $data  = $request->input();
            //     return redirect()->route('users/user')
            //     ->with( 'message', 'Welcome To Dashboard' ,$request->session()->put('user',$data['email']));
            //     // return  response()->view('users.user');
            // }

                
         } 
         return redirect("login")->with('message','Invalid Credentials');
    }   

    
}
