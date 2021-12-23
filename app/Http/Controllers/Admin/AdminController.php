<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use DB;
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
        
        $role = user::find(2);
        //$permission = Permission::all();
            // return $user;
        //return $role;
        $role->givePermissionTo('write post');
        return view('resellers.create-post');
        // return view('resellers.reseller-dashboard');
    }

    //Add Resellers Dashboard 

    public function addResellser(Request $request)
    {
        
        return view('resellers.addresellers');
       
    }

    //SubResellers Dashboard 

     public function subReseller(Request $request)
     {
          return view('subresellers.create-post');

        $role = user::find(3);
        $role->assignRole('writer', 'admin');
        // $role->assignRole('writer');
       //return $role;
        // //$permission = Permission::all();
        //     // return $user;
        // //return $role;
        // $role->givePermissionTo(['write post','edit post']);
       // return view('subresellers.subresellers-dashboard');
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

        //   $user = user::find(1);
        //   $role = Role::all();
        //   $user->assignRole($role);
        //   return auth()->user()->getAllPermissions();
        //  /return $role;
        // //return $role;
        // $role->givePermissionTo($permission);
        
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

            $roles = Role::pluck('name');
            $permission = Permission::pluck('id');
            //    return $permission;

            $datas = DB::table('role_has_permissions')
            ->join("roles", "roles.id" ,"=", "role_has_permissions.role_id" )
             ->join("permissions", "permissions.id" ,"=", "role_has_permissions.permission_id" )
            ->get();


        //   return $datas;
        // foreach($roles_id as $test)
        // {
        //     $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        //     ->where("role_has_permissions.role_id",$test)
        //     ->get();
        // }

        //  $users = DB::('permissions')->get();
        // return $users;
        

        //  return  $rolePermissions;

        return view('admin.role',compact(['datas', 'roles']));
    }

    public function permission()
    {
        return view('admin.permission');
    }

    
}
