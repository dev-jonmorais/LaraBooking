<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 *   To Laravel 8 :
 *
 *   use App\Http\Controllers\UserController;
 *
 *   Route::get('/users', [UserController::class, 'index']);
 *       or
 *   Route::get('/users', 'App\Http\Controllers\UserController@index');
 */

Route::get('cities', [CityController::class, 'index'])->name('cities.index');

Route::get('cities/create-step-one', [CityController::class, 'createStepOne'])->name('cities.create.step.one');
Route::post('cities/create-step-one', [CityController::class, 'postCreateStepOne'])->name('cities.create.step.one.post');

Route::get('cities/create-step-two', [CityController::class, 'createStepTwo'])->name('cities.create.step.two');
Route::post('cities/create-step-two', [CityController::class, 'postCreateStepTwo'])->name('cities.create.step.two.post');

Route::get('cities/create-step-three', [CityController::class, 'createStepThree'])->name('cities.create.step.three');
Route::post('cities/create-step-three', [CityController::class, 'postCreateStepThree'])->name('cities.create.step.three.post');
