<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\User;
use App\Models\Book;
use App\Models\Member;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //MANDAMOS A LLAMAR EL SEEDER
        $this->call([
            GenreSeeder::class
        ]);

        Book::factory(100)->create();
        Author::factory(100)->create();
        Member::factory(100)->create();
    }
}
