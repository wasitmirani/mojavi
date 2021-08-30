<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\Dashboard;

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
    return view('frontend.index');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum'])->name('teacher.')->group(function(){

    Route::get('categories', function () {
        return view('backend.teacher.category');
    })->name('categories');

    Route::get('courses', function () {
        return view('backend.teacher.course');
    })->name('courses');

    Route::get('students', function () {
        return view('backend.teacher.students');
    })->name('students');

});
