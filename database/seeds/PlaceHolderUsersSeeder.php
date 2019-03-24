<?php

use Illuminate\Database\Seeder;

class PlaceHolderUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place_holder_users')->insert([
            'name' => Str::random(10)
            
        ]);
    }
}
