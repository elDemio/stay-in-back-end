<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            [
                'title' => 'Alojamiento entero',
                'description' => 'Espacio que abarca todo un terreno donde puede acceder el huésped y hacer uso exclusivo.',
                'icon_image' => 'entire.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Habitación privada',
                'description' => 'Espacio donde el huésped puede gozar de privacidad garantizada sin externos (a excepción del anfitrión cuando se le necesita)',
                'icon_image' => 'private.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Habitación compartida',
                'description' => 'Espacio donde puede acceder tanto el huésped como externos (puede ser el anfitrión o un acompañante).',
                'icon_image' => 'shared.svg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
