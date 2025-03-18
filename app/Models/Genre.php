<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Book;

class Genre extends Model
{
    protected $fillable = ['genre_name'];

    //el genero tiene muchos libros
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
