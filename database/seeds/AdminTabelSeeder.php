<?php

use App\Models\admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
 
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'nayanmolla@admin.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}