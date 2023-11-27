<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Apartamentos',
                'description' => 'Hogar ideal lejos de casa para los viajeros que quieren tener su propio espacio al final del día.',
                'icon_image' => 'apartment.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Casas',
                'description' => 'Edificio de una o pocas plantas que está destinada a la vivienda de una única familia, ideal para aquellos que gustan de un espacio cerrado para disfrutar con buena compañía.',
                'icon_image' => 'house.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Alojamientos únicos',
                'description' => 'Estructuras originales o poco convencionales, como casas del árbol, yurtas o granjas.',
                'icon_image' => 'unique.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
