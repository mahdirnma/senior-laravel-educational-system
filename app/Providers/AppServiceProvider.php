<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('manage-courses', function ($user,Course $course) {
            if ($user instanceof Teacher) {
                if ($course->teacher->id==$user->id){
                    return true;
                }
            }
            return false;
        });
        Gate::define('manage-lessons', function ($user,Lesson $lesson) {
            if ($user->field==$lesson->field){
                return true;
            }
            return false;
        });
    }
}
