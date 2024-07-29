<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
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
    $post = Post::find(2);

    $post->comments()->create([
        'content' => 'Comentario de prueba',
    ]);

    return 'Comentario creado';
});