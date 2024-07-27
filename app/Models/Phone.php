<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'user_id'];

    // Relacion inversa
    public function user()
    {
        return $this->belongsTo(User::class); // El nombre de la clase es el nombre de la tabla en singular y en plural
    }
}
