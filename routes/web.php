<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MentorCantroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// mentor router
Route::resource('mentor',MentorCantroller::class)->names('mentor');
// student router
Route::resource('student',StudentController::class)->names('student');
// course router
Route::resource('course',CourseController::class)->names('course');
// group router
Route::resource('group',GroupController::class)->names('group');
