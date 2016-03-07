<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('cars')->insert([ //,
                'make' => $faker->domainWord,
                'model' => $faker->company,
				'produced_on'=>$faker->date($format = 'Y-m-d', $max = 'now') 
            ]);
        }
    }
}
