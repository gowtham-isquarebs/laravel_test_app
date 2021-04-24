<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country_code' => Str::random(3),
            'name' => Str::random(15)
        ]);
    }
}