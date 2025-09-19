<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\TestGlobalMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        // Middleware Alias
        //
        $middleware->alias([
            'role' => RoleMiddleware::class,
        ]);
        //
        // Global Middleware 
        //
        //$middleware->append(TestGlobalMiddleware::class);
        //$middleware->append(RoleMiddleware::class);
        //
        // Group Middleware
        //
        /*$middleware->appendToGroup('middleware-group',
            [
                RoleMiddleware::class,
                TestGlobalMiddleware::class,
            ]
        );*/
        //
        // Assigning Group Middleware to Web routes
        //
        /*$middleware->web(append:
            [
                RoleMiddleware::class,
                TestGlobalMiddleware::class,
            ]
        );*/
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
