<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', function () {
    return view('person', [
        'name' => 'Mark Israel A. Burce',
        'age' => 21,
        'address' => 'Iriga City',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Zeus',
            'age' => 18 
        ], 
        [
            'name' => 'Hercules',
            'age' => 115
        ], 
        [
            'name' => 'Athena',
            'age' => 190
        ], 
        [
            'name' => 'Poseidon',
            'age' => 17
        ], 
        [
            'name' => 'Thor',
            'age' => 10
        ], 
    ]
    ]);
});