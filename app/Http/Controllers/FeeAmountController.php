<?php

namespace App\Http\Controllers;

use App\FeeCategoryAmount;
use App\StudenFee;
use App\Student_Class;
use Illuminate\Http\Request;

class FeeAmountController extends Controller
{
    public function view(){
        $feeAmountAlls = FeeCategoryAmount::all();
        return view('admin.FeeAmount.view_fee_amount', compact('feeAmountAlls'));
    }
    public function add(){
        $data['fee_categories'] = StudenFee::all();
        $data['classes'] = Student_Class::all();
        return view('admin.FeeAmount.add_fee_amount', compact('data'));
    }
}
