<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function role()
    {
        $roles = Role::where("is_delete","1")->whereNotIn('id', [1])->get();
        return view('role.role',compact('roles'));
    }

    public function createrole(Request $request)
    {
       $role = new Role();
       $role->name = $request->name;
       $role->save();
       return redirect(url('/role'));
    }

    public function editrole($id)
    {
         $edit_role = Role::find($id);
         return view('role.edit',compact('edit_role'));
    }

    public function updaterole(Request $request ,$id)
    {
         $update = Role::find($id);
         $update->name = $request->name;
         $update->update();
         return redirect(url('/role'));

    }

    public function delete($id)
    {
        $delete_role = Role::find($id);
        $delete_role->is_delete = 0;
        $delete_role->update();
        return back();
    }
}
