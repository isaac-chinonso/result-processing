<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Auth\UserController;
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

Route::get('/', [PageController::class, 'login'])->name('login');

Route::get('register', [PageController::class, 'register']);

Route::post('sigin', [UserController::class, 'signin']);

Route::post('savelogin', [UserController::class, 'savelogin']);

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/', [PageController::class, 'index'])->name('dashboard');

    Route::get('/departments', [PageController::class, 'department']);

    Route::post('/save-department', [PostController::class, 'savedepartment']);

    Route::get('/delete-department/{id}', [PostController::class, 'deletedepartment'])->name('deletedepartment');

    Route::post('/update-department/{id}', [PostController::class, 'updatedepartment'])->name('updatedepartment');

    Route::get('/programs', [PageController::class, 'program']);

    Route::post('/save-program', [PostController::class, 'saveprogram']);

    Route::get('/delete-program/{id}', [PostController::class, 'deleteprogram'])->name('deleteprogram');

    Route::post('/update-program/{id}', [PostController::class, 'updateprogram'])->name('updateprogram');

    Route::get('/courses', [PageController::class, 'course']);

    Route::post('/save-course', [PostController::class, 'savecourse']);

    Route::get('/delete-course/{id}', [PostController::class, 'deletecourse'])->name('deletecourse');

    Route::post('/update-course/{id}', [PostController::class, 'updatecourse'])->name('updatecourse');

    Route::get('/students', [PageController::class, 'student']);

    Route::post('/save-student', [PostController::class, 'savestudent']);

    Route::get('/delete-student/{id}', [PostController::class, 'deletestudent'])->name('deletestudent');

    Route::post('/update-student/{id}', [PostController::class, 'updatestudent'])->name('updatestudent');

    Route::get('/compute-result', [PageController::class, 'computeresult']);

    Route::get('/result', [PageController::class, 'result']);

    Route::get('/result-details/{id}', [PageController::class, 'resultdetails'])->name('studentresult');

    Route::get('/result-details/{id}', [PageController::class, 'resultdetails'])->name('studentresult');

    Route::post('/generate-result', [PostController::class, 'saveresult']);
});

Route::get('logout', [UserController::class, 'logout'])->name('logout');
