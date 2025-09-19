<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\EloquentORMController;
use App\Http\Controllers\MiddlewareController;
//use App\Http\Controllers\ControllerMiddleware;
use App\Http\Controllers\ControllerGlobalMiddleware;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/queryBuilder', [QueryBuilderController::class, 'queryBuilder']);
//
//Route::get('/eloquentORM', [EloquentORMController::class, 'eloquentORM']);
//
//Route::get('/formSubmission', [MiddlewareController::class, 'formView'])
//           ->name('form.view');
//
// Route which has controller assigned by middleware
/*Route::post('/formSubmitted', [MiddlewareController::class, 'formStore'])
            ->name('form.store')
            ->middleware(RoleMiddleware::class);*/
//
//Route::get('/formSubmission', [ControllerMiddleware::class, 'formView'])
//          ->name('form.view');
//
// Route which has middleware in controller
/*Route::post('/formSubmitted', [ControllerMiddleware::class, 'formStore'])
            ->name('form.store');*/
//
//Route::get('/formSubmission', [ControllerGlobalMiddleware::class, 'formView'])
//          ->name('form.view');
//
// Route which has global middleware
/*Route::post('/formSubmitted', [ControllerGlobalMiddleware::class, 'formStore'])
            ->name('form.store');*/
//
//Route::get('/formSubmission', [ControllerGlobalMiddleware::class, 'formView'])
//           ->name('form.view');
//
// Route which has group middleware
/*Route::post('/formSubmitted', [ControllerGlobalMiddleware::class, 'formStore'])
            ->middleware('middleware-group')
            ->name('form.store');*/
//
//Route::get('/formSubmission', [ControllerGlobalMiddleware::class, 'formView'])
//           ->name('form.view');
//
// Route which has alias middleware
/*Route::post('/formSubmitted', [ControllerGlobalMiddleware::class, 'formStore'])
            ->middleware('role')
            ->name('form.store');*/
//
//Route::get('/formSubmission', [ControllerGlobalMiddleware::class, 'formView'])
//           ->name('form.view');
//
// Route which has web middleware
/*Route::post('/formSubmitted', [ControllerGlobalMiddleware::class, 'formStore'])
            ->name('form.store');*/
//
//Route::get('/formSubmission', [ControllerGlobalMiddleware::class, 'formView'])
//           ->name('form.view');
//
// Route which has parameters in middleware
/*Route::post('/formSubmitted', [ControllerGlobalMiddleware::class, 'formStore'])
            ->middleware('role:user')
            ->name('form.store');*/
//
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web"
| middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes that require authentication
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        //return view('user');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';