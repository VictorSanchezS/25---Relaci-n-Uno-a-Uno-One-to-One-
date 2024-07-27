<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('prueba', function (){
//     User::create([
//         'name' => 'Victor Sanchez',
//         'email' => 'victor@example.com',
//         'password' => bcrypt('secret'),
//     ]);
//     return "Usuario creado exitosamente";
// });

Route::get('prueba', function (){
    $phone = Phone::find(1);

    return $phone->user;
});