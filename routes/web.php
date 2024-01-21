<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormGelisimController;
use App\Http\Controllers\FormBedenselController;
use App\Http\Controllers\CalendarsController;
use App\Http\Controllers\Abblsr;
use App\Models\Student;


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
    return view('auth.login');
});


Route::resource('dashboard', DashboardController::class)->middleware(['auth']);
Route::resource('students', StudentController::class)->middleware(['auth']);
Route::resource('bedenselperformans', FormBedenselController::class)->middleware(['auth']);
Route::resource('calendars', CalendarsController::class)->middleware(['auth']);

Route::post('students/image/upload/{id}', [StudentController::class, "upload"])->middleware(['auth']);

Route::get('/gelisimdegerlendirme/{student_id}/{id}', [FormGelisimController::class, "show"])->middleware(["auth"]);
Route::resource('gelisimdegerlendirme', FormGelisimController::class)->except(["show"])->middleware(['auth']);
Route::resource('/abbls', Abblsr::class)->middleware(['auth']);
Route::get('/abbls/{student_id}/{id}', [Abblsr::class, "show"])->middleware(["auth"]);



Route::get('/map', function () {
    return view('map', ["students" => Student::orderBy("name")->get()]);
})->middleware(['auth'])->name('map');

require __DIR__ . '/auth.php';
