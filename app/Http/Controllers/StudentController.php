<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginStudentRequest;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function loginForm()
    {
        return view('auth.student.login');
    }

    public function login(LoginStudentRequest $request)
    {
        $myData=$request->only('email','password');
        if (!Auth::guard('students')->attempt($myData)) {
            return redirect()->route('student.login.form');
        }
        return redirect()->route('student.dashboard');
    }
    public function index()
    {
        return view('student.dashboard');
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
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
