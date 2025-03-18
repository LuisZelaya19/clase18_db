<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'genre_name' => 'Terror'
            ],
            [
                'genre_name' => 'Accion'
            ],
            [
                'genre_name' => 'Deportes'
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre); //CONSULTA DE INSERCION
        }
    }
}
