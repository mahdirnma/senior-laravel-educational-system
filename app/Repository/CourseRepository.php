<?php

namespace App\Repository;

use App\Models\Course;
use App\Repository\contracts\CourseRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class CourseRepository implements CourseRepositoryInterface
{

    public function all()
    {
        $teacher=Auth::guard('teachers')->user();
        $courses=$teacher->courses()->paginate(2);
        return $courses;
    }

    public function create($data): Course
    {
        $teacher=Auth::guard('teachers')->user();
        $course=Course::create($data);
        $teacher->courses()->attach($course);
        return $course;
    }

    public function update($data, $course): ?Course
    {
        $course->update($data);
        return $course;
    }

    public function delete($course): bool
    {
        $teacher=Auth::guard('teachers')->user();
        $status=$course->update(['is_active'=>0]);
        $teacher->courses()->detach($course);
        if($status){
            return true;
        }
        return false;
    }
}
