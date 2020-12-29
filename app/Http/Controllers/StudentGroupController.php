<?php

namespace App\Http\Controllers;

use App\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    public function view(){
        $view_groups = StudentGroup::all();
        return view('admin.group.view_group', compact('view_groups'));
    }
    public function add(){
        return view('admin.group.add_group');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:student_groups',
        ]);
        $data = new StudentGroup();
        $data['name'] = $request['name'];
        $data->save();
        $notification = array(
            'message' => 'Student Group Save Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/group/add')->with($notification);
    }
    public function edit($id){
        $edit_groups = StudentGroup::find($id);
        return view('admin.group.edit_group', compact('edit_groups'));
    }
    public function update(Request $request, $id){
        $data = StudentGroup::find($id);
        $validatedData = $request->validate([
            'name'=>'required|unique:student_groups',
        ]);
        $data['name'] = $request['name'];
        $data->update();
        $notification = array(
            'message' => 'Student Group Update Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/group/view')->with($notification);
    }
    public function delete($id){
        $delete = StudentGroup::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'Student Group Delete Successfully',
            'alert-type' => 'warning'
        );
        return redirect('student/group/view')->with($notification);
    }
}
