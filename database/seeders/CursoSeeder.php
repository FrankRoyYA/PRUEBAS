<?php

namespace Database\Seeders;

use App\Models\Curso; // ← Importar el modelo correcto
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */ 
    public function run(): void 
    {
        // Llamado del archivo CursoFactory, crear 50 registros 
        Curso::factory(50)->create();
    }
}