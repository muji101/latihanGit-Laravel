<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate(); //menghapus database sebelum di db seed
        
        $faker = Factory::create('id_ID');
        $gender = ['L','P'];
        $religion = ['Islam','Kristen','Katolik','Budha','Hindu','Atheis'];
        
        for ($i=0; $i < 20; $i++) { 
            DB::table('students')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(17, 30),
                'class' => $faker->numberBetween(7,12),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'religion' => $faker->randomElement($religion),
                'status' => $faker->boolean(),
                'image' => $faker->imageUrl()
            ]);    
        }

        
    }
}

