<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo(function (Request $request){
            if ($request->expectsJson()) {
                return null;
            }
            if ($request->routeIs('teachers.*')){
                return route('teacher.login');
            }
            if ($request->routeIs('students.*')){
                return route('student.login');
            }
            return route('student.login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
