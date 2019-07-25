<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRoom;
class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();
        return view('admin.class', compact('classes'));
    }
}
