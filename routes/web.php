<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;



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


Route::get('/login',[UsersController::class,'loginIndex'])->name('loginIndex');
Route::post('/login',[UsersController::class,'login'])->name('login');

Route::get('/logout',[UsersController::class,'logout'])->name('logout');
Route::post('/logout',[UsersController::class,'logout'])->name('logout');


//Admin Side Routes
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Student Manage routes
Route::get('/studentForm',[StudentController::class,'index'])->name('index');
Route::put('/studentForm',[StudentController::class,'create'])->name('create');

Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');

Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');
Route::put('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');

//Branches
Route::get('branches',[BranchController::class,'index'])->name('branches');
Route::put('branches',[BranchController::class,'create'])->name('create');

Route::get('editbranches/{id}',[BranchController::class,'edit'])->name('edit');
Route::put('editbranches/{id}',[BranchController::class,'update'])->name('edit');
Route::get('deletebranch/{id}',[BranchController::class,'destroy'])->name('destroy');
Route::put('deletebranch/{id}',[BranchController::class,'destroy'])->name('destroy');

//Course Route

Route::get('courseForm',[CourseController::class,'index'])->name('courseForm');
Route::get('courseList',[CourseController::class,'courseList'])->name('courseList');
Route::get('courseForm',[CourseController::class,'dropdown'])->name('dropdown');
Route::put('courseForm',[CourseController::class,'create'])->name('createForm');
Route::get('coursedelete/{id}',[CourseController::class,'destroy'])->name('createForm');
Route::post('coursedelete/{id}',[CourseController::class,'destroy'])->name('createForm');

Route::get('sbranch','BranchController@store');
Route::put('sbranch','BranchController@store');





