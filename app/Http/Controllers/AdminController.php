<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class AdminController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.home', compact('user'));
    }
    public function user(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.master', compact('user'));
    }
    // public function category(){
    //     return view('admin.category.category');
    // }
}
