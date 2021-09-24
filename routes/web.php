<?php

use App\Http\Controllers\BuyGtxController;
use App\Mail\GtxMail;
use Illuminate\Support\Facades\Mail;
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
    return view('buy');
})->name('buy');

Route::get('/buy', function () {
    return view('home');
})->name('home');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/tokenomics', function () {
    return view('tokenomics');
})->name('tokenomics');

Route::get('/roadmap', function () {
    return view('roadmap');
})->name('roadmap');

Route::get('/request-sent', function () {
    return view('request-sent');
})->name('request-sent');

Route::get('/buy-gtx', [BuyGtxController::class, 'store']);

Route::get('/email', function () {
    Mail::to('eydamson@gmail.com')->send(new GtxMail(100,200));

    return new GtxMail(100,200);
});
