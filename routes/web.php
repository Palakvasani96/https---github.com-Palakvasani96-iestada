<?php

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
    return view('website.home.index');
})->name('home');
Route::get('/aboutUs', function () {
    return view('website.aboutUs.index');
})->name('aboutUs');
Route::get('/contactUs', function () {
    return view('website.contactUs.index');
})->name('contactUs');
Route::get('/export', function () {
    return view('website.export.index');
})->name('export');
Route::get('/catalogue', function () {
    return view('website.catalogue.index');
})->name('catalogue');
Route::get('/collection/2-2', function () {
    return view('website.collection.collection');
})->name('collection.2-2');
Route::get('/collection/2-4', function () {
    return view('website.collection.2-4');
})->name('collection.2-4');
Route::get('/collection/12-12', function () {
    return view('website.collection.12-12');
})->name('collection.12-12');
Route::get('/collection/12-18', function () {
    return view('website.collection.12-18');
})->name('collection.12-18');
Route::get('/collection/12-24', function () {
    return view('website.collection.12-24');
})->name('collection.12-24');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


