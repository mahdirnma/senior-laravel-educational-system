<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function lessons()
    {
        $lessons = Lesson::where('is_active',1)->paginate(2);
        return view('lesson.index',compact('lessons'));
    }

    public function studentLessonsStore(Lesson $lesson)
    {
        $student=Auth::guard('students')->user();
        $student->lessons()->attach($lesson);
        return redirect()->route('student.lessons.profile');
    }

    public function studentLessonsProfile()
    {
        $student=Auth::guard('students')->user();
        $lessons=$student->lessons()->paginate(2);
        return view('student.lesson.profile.index',compact('lessons'));
    }
    public function index()
    {
        //
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
    public function store(StoreLessonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
