<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    $users = [
        (object)["id" => 1, "name" => "John"],
        (object)["id" => 2, "name" => "Jane"],
        (object)["id" => 3, "name" => "Bob"],
    ];

    $users = collect($users);

    return view('user.index', compact('users'));
});
