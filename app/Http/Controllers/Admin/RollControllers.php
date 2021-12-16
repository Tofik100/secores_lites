<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RollControllers extends Controller
{
    //
    public function createRole(Request $request)
    {

        $this->validate($request, [
            'addRole' => 'required',
            'guard_name' => 'required'
        ]);

        // return $request;
    
        $role = Role::create(['name' => $request->input('addRole'),'guard_name' => $request->input('guardName')]);
        // $role->syncPermissions($request->input('addRole'));
    
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
        return redirect()->route('role')->with('roleDelete', 'role deleted');
    }
}
