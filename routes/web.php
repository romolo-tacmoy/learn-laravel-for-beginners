<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function() {
    $ninjas = [
        ["id" => "1", "name" => "mario", "skill" => 75],
        ["id" => "2", "name" => "luigi", "skill" => 45]
    ];

    return view('ninjas.index', ['greeting' => 'hello world', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/create', function() {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id) {
    return view('ninjas.show', ['id' => $id]);
});

