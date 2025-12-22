<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Electricista', 'description' => 'Trabajos de instalación, reparación y mantenimiento eléctrico en hogares o locales.'],
            ['name' => 'Jardinería', 'description' => 'Mantenimiento de jardines, césped, plantas y espacios verdes.'],
            ['name' => 'Cuidado de ancianos', 'description' => 'Asistencia y cuidado de personas mayores en sus hogares.'],
            ['name' => 'Cuidado de mascotas', 'description' => 'Paseo, alimentación y cuidado de animales domésticos.'],
            ['name' => 'Limpieza doméstica', 'description' => 'Limpieza general de casas, departamentos o locales.'],
            ['name' => 'Reparto y mensajería', 'description' => 'Entrega de paquetes, documentos y encomiendas.'],
            ['name' => 'Plomería', 'description' => 'Reparación e instalación de cañerías y sistemas de agua.'],
            ['name' => 'Pintura', 'description' => 'Pintura de interiores, exteriores y reparación de superficies.'],
            ['name' => 'Computación', 'description' => 'Soporte técnico, reparación de computadoras y asesoramiento tecnológico.'],
            ['name' => 'Ayuda con mudanzas', 'description' => 'Transporte y organización de mudanzas pequeñas y medianas.'],
        ];

        foreach ($categories as $category) {
            JobCategory::create($category);
        }
    }
}
