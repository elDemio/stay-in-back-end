<?php

namespace Database\Seeders;

use App\Models\API\V1\Category;
use App\Models\API\V1\City;
use App\Models\API\V1\Country;
use App\Models\API\V1\PropertyType;
use App\Models\API\V1\RoomType;
use App\Models\API\V1\State;
use App\Models\API\V1\Subcategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    public function run()
    {
        DB::table('properties')->insert([
            [
                'name' => 'Terrazas en la frontera',
                'description' => 'Disfruta de una auténtica experiencia en las colindas de nuestro país, intensificando tus límites al rededor de un río con causes monstruosos.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '1° calle oriente, Colonia El naranjo, Pasaje N° 9, Casa N° 19',
                'accommodate_count' => 6,
                'bedroom_count' => 4,
                'bed_count' => 4,
                'bathroom_count' => 2,
                'price' => 28,
                'cover' => '1.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cuencos del diablo',
                'description' => 'Cuencos del diablo es un paraíso infernal donde vivirás una experiencia única durante tu estadía. No apto para huéspedes que padecen del corazón.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 52,
                'cover' => '2.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Brisas del Cóncavo',
                'description' => 'Atrévete a explorar un sendero oculto que además de probar tu valentía, cada segundo acumulará una experiencia única durante tu visita.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '3° calle oriente, Colonia El naranjo, Pasaje N° 7, Casa N° 37',
                'accommodate_count' => 8,
                'bedroom_count' => 6,
                'bed_count' => 6,
                'bathroom_count' => 4,
                'price' => 46,
                'cover' => '3.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hogar San Miguelito',
                'description' => 'Casa con 5 habitaciones cómoda para una familia con lindo patio para hacer tus asados. Parqueo privado, amplió espacio para disfrutar con tu familia. Dos salas con televisión y wifi incluido.
                Cerca de supermercado y restaurantes, localizada cerca de Ruta Militar fácil acceso a todo San Miguel.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 37,
                'cover' => '4.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'El Cocal',
                'description' => 'Rancho ubicado en zona segura y de fácil acceso en Playa El Espino. Cuenta con piscina, glorieta con parrilla, corredores y jardines. Cada habitación está equipadas con aire acondicionado, un camarote y una cama matrimonial, la principal cuenta con baño privado y las otras dos tienen un baño compartido. La cocina está totalmente equipada (licuadora, refrigeradora, microondas, cafetera).
                Se recomienda realizar la caminata al estero al atardecer',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 45,
                'cover' => '14.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'El Bosque de Mangle',
                'description' => 'BOSQUE DE MANGLE Casa frente al mar en una de las playas mas bellas de El Salvador. Playa El Espino,  ubicada a 2:30 horas de San Salvador.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 69,
                'cover' => '6.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Majague Lodge',
                'description' => 'El majague Lodge situado en unas de las playas más privadas y hermosas del Oriente de El Salvador y a 8 min. de playa Las Flores considerada una de las mejores playas para el surf  te ofrece un ambiente de tranquilidad y descanso. La cabaña cuentan con Wiffi, Aire acondicionado, TV por cable, 2 camas Queen terraza y piscina pequeña privada. 
                En el lodge se ubica otra cabaña y un apartamento.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 72,
                'cover' => '7.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alma de Coco',
                'description' => 'Desconéctate en este paraíso tropical ubicado en Playa El Cuco, a 30 minutos de la Ciudad de San Miguel, El Salvador y a 2.5 horas del Aeropuerto Internacional.
                Moderna casa de playa con acceso directo al mar y vistas a la playa desde las habitaciones. 
                Diseñada para tu comodidad y entretenimiento, cuenta con amplios espacios y diferentes amenidades para disfrutar con familia y amigos. ',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 34,
                'cover' => '8.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aki Surf Place',
                'description' => 'Casa Glenda Loft Cottage (DOT Accredited) se encuentra en el complejo de San Juan Surf Resort.  Está regentado por un surfista legendario, Mr. Aki o Aki San.  Un japonés que comenzó a desarrollarse y fue pionero en la Capital del Surf del Norte, San Juan, La Unión.  Estamos ubicados en el corazón de la ciudad de San Juan Surf, a un minuto a pie de la playa pasando el resort y el lugar es muy privado, con una puerta y con un amplio jardín para estacionar su vehículo.  Es tranquilo, pacífico y lo mejor de todo: ¡SEGURO!',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 53,
                'cover' => '9.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paisaje marino - Sueños',
                'description' => '
                Un impresionante apartamento en el ático. 2 dormitorios, capacidad para 6 personas, bellamente decorado, espacioso, tiene vistas espectaculares al mar y se encuentra en el corazón de Surf Town.
                Lo que este lugar ofrece
                Vista al océano',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 87,
                'cover' => '10.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Villa Verde',
                'description' => 'Si está planificando sus próximas vacaciones o simplemente proyectando una escapada, sepa que ha elegido un lugar con características únicas.
                Villa Verde se encuentra en un bosque de 10 manzanas totalmente privado y seguro que está mezclado con bellas y exclusivas cabañas tipo rústico europeo; ahora queremos compartir la paz que reina nuestro lugar con usted.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 38,
                'cover' => '11.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Villa Verde 2',
                'description' => 'Si está planificando sus próximas vacaciones o simplemente proyectando una escapada, sepa que ha elegido un lugar con características únicas. 
                Villa Verde 2 se encuentra en un bosque de 20 manzanas totalmente privado y seguro que está mezclado con bellas y exclusivas cabañas tipo rústico asiático; ahora queremos compartir la paz que reina nuestro lugar con usted.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 5, Casa N° 31',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 56,
                'cover' => '12.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ruta de La Paz',
                'description' => 'abaña/Casa de Campo en zona accesible, sobre carretera principal de la Ruta de La Paz, a su vez rodeada de la naturaleza: pinos, árboles frutales, ambiente libre de contaminación,  a 5 min del pueblo de Perkin y accesible a múltiples opciones turísticos de la zona como: ríos, cascadas, museos y más… un lugar seguro, limpio, clima fresco y agradable, recomendado para que puedas compartir en familia, pareja o grupos de amigos.',
                'user_id' => User::all()->random()->id,
                'property_type_id' => PropertyType::all()->random()->id,
                'room_type_id' => RoomType::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'subcategory_id' => Subcategory::all()->random()->id,
                'country_id' => Country::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'city_id' => City::all()->random()->id,
                'address' => '2° calle oriente, Colonia El naranjo, Pasaje N° 8, Casa N° 28',
                'accommodate_count' => 8,
                'bedroom_count' => 5,
                'bed_count' => 6,
                'bathroom_count' => 6,
                'price' => 95,
                'cover' => '13.webp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
