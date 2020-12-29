<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function view(){
        $allUsers = User::all();
        return view('admin.user.user_view', compact('allUsers'));
    }
    public function add(){
        return view('admin.user.add_user');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'usertype'=>'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password'=>'required|min:5|max:25',
            'confirm_password'=>'required|min:5|max:25|same:password',
        ],['usertype.required'=>'Select User Type First']);
        $data = new User();
        $data['usertype'] = $request['usertype'];   
        $data['name'] = $request['name'];   
        $data['email'] = $request['email'];   
        $data['password'] = md5($request['password']);
        $data->save();
        $notification = array(
            'message' => 'User Information Saved Successfully',
            'alert-type' => 'success'
        );
        return redirect('users/add')->with($notification);   
    }
    public function edit($id){
        $editUser = User::find($id);
        return view('admin.user.edit_user', compact('editUser'));
    }
    public function update(Request $request, $id){
        $data = User::find($id);
        $data['usertype'] = $request['usertype'];   
        $data['name'] = $request['name'];   
        $data['email'] = $request['email'];   
        $data->update();
        $notification = array(
            'message' => 'User Information Update Successfully',
            'alert-type' => 'success'
        );
        return redirect('users/view')->with($notification); 
    }
    public function delete($id){
        $delete = User::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'User Information Delete Successfully',
            'alert-type' => 'warnning'
        );
        return view('users/view')->with($notification);     
    }
}
