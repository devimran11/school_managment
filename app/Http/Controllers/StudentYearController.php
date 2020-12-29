<?php

namespace App\Http\Controllers;

use App\StudentYear;
use Illuminate\Http\Request;

class StudentYearController extends Controller
{
    public function view(){
        $view_years = StudentYear::all()->sortByDesc('name');
        return view('admin.year.view_year', compact('view_years'));
    }
    public function add(){
        return view('admin.year.add_year');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:student_years',
        ]);
        $data = new StudentYear();
        $data['name'] = $request['name'];
        $data->save();
        $notification = array(
            'message' => 'Student Year Save Successfully',
            'alert-type' => 'success'
        );
        return redirect('student/year/add')->with($notification);
    }
    public function edit($id){
        $editData = StudentYear::find($id);
        return view('admin.year.edit_year', compact('editData'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name'=>'required|unique:student_years',
        ]);
        $updateData = StudentYear::find($id);
        $updateData['name'] = $request['name'];
        $updateData->update();
        $notification = array(
            'message' => 'Year Update Successfully',
            'alert-type' => 'info'
        );
        return redirect('student/year/view')->with($notification);
    }
    public function delete($id){
        $deleteData = StudentYear::find($id);
        $deleteData->delete();
        $notification = array(
            'message' => 'Year Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect('student/year/view')->with($notification);
    }
}
