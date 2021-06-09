<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();

        $faker = Factory::create('id_ID');
        $gender = ['L','P'];
        $religion = ['Islam','Kristen','Katolik','Budha','Hindu','Atheis'];

        for ($i=0; $i < 20; $i++) { 
            
            DB::table('teachers')->insert([
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(25,40),
                'address'=>$faker->address,
                'gender'=>$faker->randomElement($gender),
                'religion'=>$faker->randomElement($religion),
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->freeEmail,
                'birth_date'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null),
                'description'=>$faker->text,
                'image'=>$faker->imageUrl
            ]);
        }
    }
}
