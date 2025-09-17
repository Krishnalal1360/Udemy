<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\EloquentORMController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/queryBuilder', [QueryBuilderController::class, 'queryBuilder']);
//
Route::get('/eloquentORM', [EloquentORMController::class, 'eloquentORM']);