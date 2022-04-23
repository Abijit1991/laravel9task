<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

//Route::get()

//Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sample', function () {
    echo 'sample';
})->name('sample');

Route::get('/sampleapihandling', [Controllers\ApiController::class, 'index']);
Route::get('/sampleapihandling/countryname/{name}', [Controllers\ApiController::class, 'countryname']);
Route::get('/sampleapihandling/capital/{name}', [Controllers\ApiController::class, 'capital']);

Route::middleware(['auth', 'usertype1'])->group(function () {
    Route::get('/usertype1/home', [Controllers\Usertype1\HomeController::class, 'index'])->name('usertype1.index');
    Route::get('/usertype1/logout', [Controllers\Usertype1\HomeController::class, 'logout'])->name('usertype1.logout');
});

Route::middleware(['auth', 'usertype2'])->group(function () {
    Route::get('/usertype2/home', [Controllers\Usertype2\HomeController::class, 'index'])->name('usertype2.index');
    Route::get('/usertype2/logout', [Controllers\Usertype2\HomeController::class, 'logout'])->name('usertype2.logout');
});

Route::middleware(['auth', 'usertype3'])->group(function () {
    Route::get('/usertype3/home', [Controllers\Usertype3\HomeController::class, 'index'])->name('usertype3.index');
    Route::get('/usertype3/logout', [Controllers\Usertype3\HomeController::class, 'logout'])->name('usertype3.logout');
});




