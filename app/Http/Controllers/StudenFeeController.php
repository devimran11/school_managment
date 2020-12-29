<?php

namespace App\Http\Controllers;

use App\StudenFee;
use Illuminate\Http\Request;

class StudenFeeController extends Controller
{
    public function view(){
        $allfees = StudenFee::all();
        return view('admin.fee.view_fee', compact('allfees'));
    }
    public function add(){
        return view('admin.fee.add_fee');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:studen_fees',
        ]);
        $data = new StudenFee();
        $data['name'] = $request['name'];
        $data->save();
        $notification = array(
            'message' => 'Class Fee Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/fee/add')->with($notification);
    }
    public function edit($id){
        $editfee = StudenFee::find($id);
        return view('admin.fee.edit_fee', compact('editfee'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name'=>'required|unique:studen_fees',
        ]);
        $updatefee = StudenFee::find($id);
        $updatefee['name'] = $request['name'];
        $updatefee->update();
        $notification = array(
            'message' => 'Class Update Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/fee/view')->with($notification);
    }
    public function delete($id){
        $deletefee = StudenFee::find($id);
        $deletefee->delete();
        $notification = array(
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect('student/fee/view')->with($notification);
    }
}
