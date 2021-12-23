<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionControllers extends Controller
{
    //
    public function createPermission(Request $request)
    {
        $this->validate($request, [
            'addPermission' => 'required|unique:permissions,name',
            'guardName' => 'required'
        ]);
    
        $permission = Permission::create(['name' => $request->input('addPermission'),'guard_name' => $request->input('guardName')]);
        // $role->syncPermissions($request->input('addRole'));
    
        return redirect()->route('permission')
            ->with('permission', 'Permission created successfully.'); 
    }


    public function edit($id)
    {
        $editPermission = Permission::find($id);
        // return $editPermission;
        return view('admin.edit-permission', compact('editPermission'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required',
        ]);
        $data = Permission::whereId($id)->update($updateData);
        return redirect()->route('edit')->with('completed', 'Permission updated');
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('permission')->with('delete', 'permission deleted');
    }
}
