<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRoom;
use App\Http\Requests\ClassRoomRequest;

class ClassRoomController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'active.admin']);
    }

    public function index()
    {
        $classes = ClassRoom::all();
        $classes = $classes->load('admins');
        return view('admin.class', compact('classes'));
    }
    public function createForm() {
        return view('admin.add_class');
    }
    public function create(ClassRoomRequest $request) {
        $validate = $this->validate($request, [
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric'
        ]);
        ClassRoom::create($validate);
        return redirect('classes');
    }
    public function editForm(ClassRoom $class) {
        return view('admin.add_class', ['class' => $class]);
    }
    public function update(ClassRoomRequest $request) {
        $validate = $this->validate($request, [
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric'
        ]);
        $classroom = ClassRoom::find($request->id);
        $classroom->update($validate);
        return redirect('classes');
    }
    public function delete(ClassRoom $class) {
        $class->delete();
        return redirect('classes');
    }
}
