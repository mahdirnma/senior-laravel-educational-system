<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginTeacherRequest;
use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function loginForm()
    {
        return view('auth.teacher.login');
    }

    public function login(LoginTeacherRequest $request)
    {
        $myData = $request->only('email', 'password');
        if (!Auth::guard('teachers')->attempt($myData)) {
            return redirect()->route('teacher.login.form');
        }
        return redirect()->route('teachers.index');
    }
    public function logout(){
        Auth::guard('teachers')->logout();
        return redirect()->route('teacher.login.form');
    }
    public function index()
    {
        return view('teachers.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
