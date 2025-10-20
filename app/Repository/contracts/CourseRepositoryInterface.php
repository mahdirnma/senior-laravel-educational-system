<?php

namespace App\Repository\contracts;

use App\Models\Course;

interface CourseRepositoryInterface
{
    public function all();

    public function create($data): Course;
    public function update($data,$course): ?Course;
    public function delete($course): bool;
}
