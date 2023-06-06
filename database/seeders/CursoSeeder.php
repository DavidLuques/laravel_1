<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;


class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->name="laravel_che";
        $curso->description="The best PHP framew";
        $curso->category="web development";
        $curso->save();

        $curso2 = new Curso();
        $curso2->name="laravel_che";
        $curso2->description="The best PHP framew";
        $curso2->category="web development";
        $curso2->save();

        $curso3 = new Curso();
        $curso3->name="laravel_che";
        $curso3->description="The best PHP framew";
        $curso3->category="web development";
        $curso3->save();

    }
}
