<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
            [
                'title' => 'Apartamento',
                'description' => 'Un apartamento o un piso es el hogar ideal lejos de casa para los viajeros que quieren tener su propio espacio al final del día.',
                'icon_image' => 'tmp1',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Casa',
                'description' => 'Una casa es un edificio para habitar. El término suele utilizarse para nombrar a la construcción de una o pocas plantas que está destinada a la vivienda de una única familia.',
                'icon_image' => 'tmp2',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Alojamiento único',
                'description' => 'Estructuras originales o poco convencionales, como casas del árbol, yurtas o granjas.',
                'icon_image' => 'tmp3',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}