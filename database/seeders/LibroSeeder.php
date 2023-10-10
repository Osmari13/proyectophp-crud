<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libro = new Libro();

        $libro->nombre = "Matematicas primer grado";
        $libro->autor = "Florinda Meza";
        $libro->descripcion = "Aprende matematicas facilmente";
        $libro->categoria = "Educacion";
        $libro->editorial = "Planeta";

        $libro->save();

        $libro2 = new Libro();

        $libro2->nombre = "Castellano primer grado";
        $libro2->autor = "Arturo Gomez Bolaños";
        $libro2->descripcion = "Aprende Castellano facilmente";
        $libro2->categoria = "Educacion";
        $libro2->editorial = "Santillana";

        $libro2->save();

        $libro3 = new Libro();

        $libro3->nombre = "Biologia primer grado";
        $libro3->autor = "Romeo Benitez";
        $libro3->descripcion = "Aprende Biologia facilmente";
        $libro3->categoria = "Educacion";
        $libro3->editorial = "Santillana";

        $libro3->save();

        Libro::factory(30)->create();
    }
}
