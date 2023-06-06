<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // $this->call(CursoSeeder::class);   // antigua manera


       Curso::factory(50)->create();   //old way ...
       \App\Models\User::factory(10)->create(); //nueva manera 

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'avatar'=>'chocolo'
        // ]);
    }
}
