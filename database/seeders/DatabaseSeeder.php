<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** 
     * Seed the application's database. 
     */ 
    public function run(): void
    {
        // Crear 50 cursos con Factory
        Curso::factory(50)->create();
        
        // Llamar a otros seeders
        $this->call(UserSeeder::class);
        
        // Crear cursos específicos manualmente
        $curso = new Curso();
        $curso->name = "Pruebas y Calidad de Software";
        $curso->description = "Asignatura de Ingeniería de Sistemas e Informática";
        $curso->category = "Desarrollo Web";
        $curso->save();

        $curso2 = new Curso();
        $curso2->name = "Programación Orientada a Objetos";
        $curso2->description = "Asignatura de Ingeniería de Sistemas e Informática";
        $curso2->category = "Desarrollo de Software";
        $curso2->save();

        $curso3 = new Curso();
        $curso3->name = "Análisis y Requerimiento de Software";
        $curso3->description = "Asignatura de Ingeniería de Sistemas e Informática";
        $curso3->category = "Desarrollo de Software";
        $curso3->save();

        // \App\Models\User::factory(10)->create();
    }
}