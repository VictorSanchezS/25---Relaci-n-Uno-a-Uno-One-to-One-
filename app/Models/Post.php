<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->hasMany(Comment::class); // El nombre de la clase es el nombre de la tabla en singular y en plural
    }
}
