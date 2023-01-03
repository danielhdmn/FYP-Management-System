<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\lecturerControl;

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

//Route::get('/', function () {
//    return view('welcome');
//});


// Route for Coordinator 

Route::get('/', [homeControl::class, 'index']);

Route::get('/students', [adminControl::class, 'displayStudent']);

Route::get('/lecturers', [adminControl::class, 'displayLecturer']);

Route::get('/creates', [adminControl::class, 'create']);

Route::POST('/createproject', [adminControl::class, 'createProject']);

Route::get('/projectlist', [adminControl::class, 'displayProject']);


// Route for Lecturer

Route::get('/studentslist', [lecturerControl::class, 'display']);

Route::get('/examineelist', [lecturerControl::class, 'displayExaminee']);

Route::get('/superviseelist', [lecturerControl::class, 'displaySupervisee']);

Route::get('/update/{id}', [lecturerControl::class, 'updateSupervisee']);

Route::post('/updateSV', [lecturerControl::class, 'updateSV']);



// Route for Testing Phase

//Route::view('/test', 'test');

//Route::view('/project', 'project');

Route::get('/redirect', [homeControl::class, 'redirectFunct']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');