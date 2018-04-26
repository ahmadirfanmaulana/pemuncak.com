<?php

use Illuminate\Database\Seeder;
use App\Destination;
use Faker\Factory as Faker;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 50 ; $i++) {
        Destination::create([
          'name' => $faker->streetName,
          'poster' => 'example.jpg',
          'lat' => -7.319112,
          'lng' => 107.731006,
          'province_id' => 1,
          'regional_id' => 1,
          'full_address' => 'Karamat Wangi, Cisurupan Garut Regency West Java'
        ]);
      }
    }
}
