<?php

namespace App\Http\Controllers;

use App\StudentShifts;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{
    public function view(){
        $allShifts = StudentShifts::all();
        return view('admin.shift.view_shift', compact('allShifts'));
    }
    public function add(){
        return view('admin.shift.add_shift');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'shift_name'=>'required|unique:student_shifts',
        ]);
        $data = new StudentShifts();
        $data['shift_name'] = $request['shift_name'];
        $data->save();
        $notification = array(
            'message' => 'Add Shift Saved Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/shift/add')->with($notification);
    }
    public function edit($id){
        $editData = StudentShifts::find($id);
        return view('admin.shift.edit_shift', compact('editData'));
    }
    public function update(Request $request, $id){
        $updateShift = StudentShifts::find($id);
        $updateShift['shift_name'] = $request['shift_name'];
        $updateShift->update();
        $notification = array(
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect('student/shift/view')->with($notification);
    }
    public function delete($id){
        $deleteData = StudentShifts::find($id);
        $deleteData->delete();
        $notification = array(
            'message' => 'Delete Shift Successfully',
            'alert-type' => 'warning'
        );
        return redirect('student/shift/view')->with($notification);
    }
}
