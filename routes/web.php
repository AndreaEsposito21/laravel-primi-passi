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
    $data = [
        'name_page' => 'Home Page',
        'data_test' => [
            'test_one' => 'test 1',
            'test_two' => 'test 2',
            'test_three' => 'test 3'
        ]
    ];

    return view('homepage', $data);
})->name('homepage');

Route::get('/page_one', function () {
    return view('page_one');
})->name('page_one');

Route::get('/page_two', function () {
    return view('page_two');
})->name('page_two');

Route::get('/page_three', function () {
    return view('page_three');
})->name('page_three');
