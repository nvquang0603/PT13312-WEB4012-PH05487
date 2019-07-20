<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Info::all();
        return view('students.index', compact('students'));
    }
}
