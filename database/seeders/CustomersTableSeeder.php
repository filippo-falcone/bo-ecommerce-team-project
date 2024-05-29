<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Generator as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newCustomer = new Customer();
            $newCustomer->name = $faker->name();
            $newCustomer->lastname = $faker->lastname();
            $newCustomer->level = $faker->randomElement(['basic', 'prime']);
            $newCustomer->email = $faker->email();
            $newCustomer->address = $faker->address();
            $newCustomer->country = $faker->country();
            $newCustomer->save();
        }
    }
}
