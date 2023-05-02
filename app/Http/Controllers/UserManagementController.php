<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserManagement;
use Exception;

class UserManagementController extends Controller
{
    public function user_management()
    {
        $managements = UserManagement::where("status","1")->get();
        return view('user_management.user_management',compact('managements'));
    }

    public function create_management(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            
        ]);
        
        try {
            $user_management = new UserManagement();
            $user_management->first_name = $request->first_name; 
            $user_management->last_name = $request->last_name; 
            $user_management->address = $request->address; 
            $user_management->phone_no = $request->phone_no; 
            $user_management->email = $request->email; 
            $user_management->gender = $request->gender; 
            $user_management->password = bcrypt($request->password); 
            $user_management->created_by = $request->created_by;
            $user_management->save();
           
            return redirect(url('/usermanagement'))->with(['status' => true,'message' => 'Data getting suucessfully']);

        }catch(Exception $e) {
            return redirect(url('/usermanagement'))->with(['status'=>false,'message'=>'UserManagement not created successfully']);
        }
    }
    public function delete_management($id)
    {
        $delete_role = UserManagement::find($id);
        $delete_role->status = 0;
        $delete_role->update();
        return back();
    }
   public function edit_management($id)
   {
        $edit_usermanagements = UserManagement::find($id);
        return view('user_management.edit_usermanagement',compact('edit_usermanagements'));
   }

   public function update_management(Request $request, $id)
   {
      $edit_management = UserManagement::find($id);
      $edit_management->first_name = $request->first_name; 
      $edit_management->last_name = $request->last_name; 
      $edit_management->address = $request->address; 
      $edit_management->phone_no = $request->phone_no; 
      $edit_management->email = $request->email; 
      $edit_management->gender = $request->gender; 
      $edit_management->password = bcrypt($request->password); 
      $edit_management->created_by = $request->created_by;
      $edit_management->update();
      return redirect(url('/usermanagement'));
      
   }

   public function role_management()
   {

    $managements = UserManagement::where("status","1")->get();
     return view('user_management.roleprivilege.role_privilege',compact('managements'));
   }
}
