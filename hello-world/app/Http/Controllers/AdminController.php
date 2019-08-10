<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\ClassRoom;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::find(1);
        $admin = $admin->load('classRoom')->toArray();
        //$class = $admin->classRoom()->get();
        return view('admins.master');
    }

    public function indexClass() {
        $class = ClassRoom::find(5);
        $admins = $class->admins;

        $class = $class->load('admins');
        dd($class);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }

    public function postLogin(Request $request)
    {
        if(Auth::check()) {
            return redirect()->route('classes.list');
        }
        $this->validate($request, [
            'email' => 'required|email|min:8|exists:admins',
            'password' => 'required|min:5|max:32'
        ]);
        $data = $request->only(['email', 'password']);

        $checkLogin = Auth::attempt($data);

        if ($checkLogin) {
            return redirect()->route('classes.list');
        } else {
            return redirect()->route('admins.list');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admins.login');
    }

    public function submitRegister(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|min:8',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8|max:32',
            're-password' => 'same:password',
            'university' => 'required',
            'class_id' => 'required',
            'is_active' => 'required',
        ]);
        $data = $request->only(['name', 'email', 'password','university', 'class_id', 'is_active']);
        Admin::create($data);
        return redirect('admins');
    }
}
