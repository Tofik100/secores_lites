<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
class RollControllers extends Controller
{
    //
    public function createRole(Request $request)
    {

        $this->validate($request, [
            'addRole' => 'required',
            'guardName' => 'required'
        ]);

        // return $request;
    
        $role = Role::create(['name' => $request->input('addRole'),'guard_name' => $request->input('guardName')]);
        // $role->syncPermissions($request->input('addRole'));
        $role->givePermissionTo($request->permission);
        return redirect()->route('role')
            ->with('success', 'Role created successfully.'); 
    }

    public function editRole($id)
    {
        $editRole = Role::find($id);
        
        // return $editPermission;
        return view('admin.edit-role', compact('editRole'));
    }

    public function updateRole(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required',
        ]);
        $data = Role::whereId($id)->update($updateData);
        return redirect()->route('role')->with('completed', 'Role updated');
    }

    public function destroyRole($id)
    {
        // return $id;
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role')->with('roleDelete', 'Role deleted');
    }


    public function assignRole(Request $request, $id)
    {
      
        // $somestate = 0; 

        // if (isset($request->permission)) {

           
        // }

        // elseif (isset($request->acco)) {
        //     return $somestate = 0;
        //  }
        

     
        if($request->permission ? 1 : 0)

            {
                 $role = Role::find($id);
                 $role->givePermissionTo($request->permission);
                 return redirect()->route('role')->with('roleAssign', 'Permission Assinged');
            }
            else
            {
                $role = Role::find($id);
                $role->revokePermissionTo($request->permission);
                return redirect()->route('role')->with('roleUncheck', 'Permission Deny ');
            }    
               
                


    }


}
