<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departments;
class departmentController extends Controller
{
    public function index()
    {
        $department= departments::all();
        return view('department', compact('departments'));
    }
}
