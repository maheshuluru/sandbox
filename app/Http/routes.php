<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/expenses', function(){
    $expenses = [
        [
            'id' => 1,
            'name' => 'saf asdfa sf',
            'price' => 150,
        ],
        [
            'id' => 2,
            'name' => 'Coffee',
            'price' => 180,
        ],
        [
            'id' => 3,
            'name' => 'Cigarette',
            'price' => 460,
        ]
    ];
    return view('expenses.index', compact('expenses'));
});