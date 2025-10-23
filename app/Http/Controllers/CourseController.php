<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repository\CourseRepository;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(protected CourseRepository $repository){}

    public function index()
    {
        $courses=$this->repository->all();
        return view('teachers.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $teacher = Auth::user();
        $course=$this->repository->create([
            ...$request->validated(),
            'field_id'=>$teacher->field->id
            ]);
        if ($course) {
            return redirect()->route('courses.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('teachers.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $status=$this->repository->update($request->validated(),$course);
        if ($status) {
            return redirect()->route('courses.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $status=$this->repository->delete($course);
        if ($status) {
            return redirect()->route('courses.index');
        }
        return redirect()->back();
    }
}
