<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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

// Show Home
Route::get('/', function () {
    return view('home');
});

// All Students
Route::get('/index', [StudentController::class, 'index']);

// Create student information
Route::get('/students/create', [StudentController::class, 'create'])->middleware('auth');

// Store Route to store created form
Route::post('/index', [StudentController::class, 'store'])->middleware('auth');
 
// Edit Student info
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->middleware('auth');

// Update Student Information
Route::post('/students/{student}', [StudentController::class, 'update'])->middleware('auth');

// Delete student information
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->middleware('auth');

//Single Student
Route::get('/students/{student}', [StudentController::class, 'show'])->middleware('auth');

// User Login/Register

// Show Rgistration Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Create New Users
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);