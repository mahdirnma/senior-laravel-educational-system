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
        // TODO: Implement update() method.
    }

    public function delete($course): bool
    {
        // TODO: Implement delete() method.
    }
}
