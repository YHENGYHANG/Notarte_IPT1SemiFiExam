<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class employeeController extends Controller
{
        public function index()
    {
        $employees= employees::all();
        return view('employee', compact('employees'));
    }
}
