<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;


class TravelsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $trip_types = [
            'Aereo',
            'Treno',
            'Nave',    
        ];
        $type_of_accommodation = [
            'Villaggio',
            'Hotel',
            'B&B',
            'Casa',
        ];


        for($i = 1; $i <= 3; $i++){

            $new_travel = new Travel();

            $new_travel->destinazione = $faker->country();
            $new_travel->trasporto = $faker->randomElement($trip_types);
            $new_travel->tipo_di_alloggio = $faker->randomElement( $type_of_accommodation);
            $new_travel->descrizione_alloggio = $faker->paragraphs(7, true);
            $new_travel->data_partenza = $faker->dateTimeThisYear();
            $new_travel->data_rientro = $faker->dateTimeThisYear();
            $new_travel->save();
        }
    }
}
