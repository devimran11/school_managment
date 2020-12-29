<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
class ManageProfileController extends Controller
{
    public function view(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile.view_profile', compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $edit_data = User::find($id);
        return view('admin.profile.edit_profile', compact('edit_data'));
    }
    public function update(Request $request){
        $this->validate($request, [
           'photo' => 'image',
        ]);
        $photo = $request->file('image');
        if($photo){
            $photo = $request->file('image');
            $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
            $location = 'admin/upload/';
            $img_url = $location.$photo_full_name;
            $photo->move($location, $photo_full_name);
            $data = User::find(Auth::user()->id);
            $data['name'] = $request['name'];
            $data['email'] = $request['email'];
            $data['mobile'] = $request['mobile'];
            $data['address'] = $request['address'];
            $data['gender'] = $request['gender'];
            $data['image'] = $img_url;
            $data->update();
        }else{
            $data = User::find(Auth::user()->id);
            $data['name'] = $request['name'];
            $data['email'] = $request['email'];
            $data['mobile'] = $request['mobile'];
            $data['address'] = $request['address'];
            $data['gender'] = $request['gender'];
            $data->update();
        }

        $notification = array(
            'message' => 'Profile Update Successfully',
            'alert-type' => 'success'
        );
        return redirect('profile/view')->with($notification);
    }
    public function password_change(){
        return view('admin.user.change_password');
    }
    public function store_password(Request $request){
        $validatedData = $request->validate([
            'current_password'=>'required',
            'new_password' => 'required|min:5|max:25',
            'confirm_password' => 'required|min:5|max:25|same:new_password',
        ]);
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
            $notification = array(
                'message' => 'Current Password Does not match',
                'alert-type' => 'warning'
            );
            return redirect('profile/change/password')->with($notification);
        }
        if(strcmp($request->get('current_password'), $request->get('new_password'))==0){
            $notification = array(
                'message' => 'Your password can not be same with new password',
                'alert-type' => 'warning'
            );
            return redirect('profile/change/password')->with($notification);
        }
        $user = Auth::user();
        $user->password = bcsqrt($request->get('new_password'));
        $user->save();
        $notification = array(
            'message' => 'Password Change Succesfully',
            'alert-type' => 'success'
        );
        return redirect('profile/change/password')->with($notification);
    }
}
