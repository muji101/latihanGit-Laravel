<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $faker = Factory::create('id_id');
        $type = ['Makanan','Minuman','Pakaian','Elektronik'];

        for ($i=0; $i < 20; $i++) { 
            DB::table('products')->insert([
                'name'=>$faker->word,
                'price'=>$faker->numberBetween(20000,300000),
                'production_date'=>$faker->date,
                'expired'=>$faker->date,
                'type'=>$faker->randomElement($type),
                'description'=>$faker->text,
                'stock'=>$faker->numberBetween(20,1000),
                'produser'=>$faker->company,
                'address'=>$faker->address,
                'postcode'=>$faker->postcode,
                'status'=>$faker->boolean()
            ]);
        }
    }
}
