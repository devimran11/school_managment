<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_Class;
class StudentClassController extends Controller
{
    public function view(){
        $view_classes = Student_Class::all();
        return view('admin.class.view_class', compact('view_classes'));
    }
    public function add(){
        return view('admin.class.add_class');
    }
    public function store(Request $request){
//        $validatedData = $request->validate([
//            'class_name'=>'required|unique:student__classes',
//        ]);
        $data = new Student_Class();
        $data['class_name'] = $request->add_class;
        $data->save();
        $notification = array(
            'message' => 'Class Add Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/class/add')->with($notification);
    }
    public function edit($id){
        $editData = Student_Class::find($id);
        return view('admin.class.edit_class', compact('editData'));
    }
    public function update(Request $request, $id){
        $updateData = Student_Class::find($id);
        $updateData['class_name'] = $request['add_class'];
        $updateData->update();
        $notification = array(
            'message' => 'Class Update Successfully',
            'alert-type' => 'info'
        );
        return redirect('student/class/view')->with($notification);
    }
    public function delete($id){
        $delete = Student_Class::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect('student/class/view')->with($notification);
    }
}
