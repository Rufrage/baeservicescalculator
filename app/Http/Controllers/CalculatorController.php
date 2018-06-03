<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator.index');
    }

    public function calculate(Request $request) {
        return $request->all();
    }
}