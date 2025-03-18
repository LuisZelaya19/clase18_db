<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Genre;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = ['title', 'published_year', 'genre_id'];

    //CADA LIBRO PERTENECE A UN GENERO
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}
