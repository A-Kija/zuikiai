<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);

        foreach (range(1, 20) as $_) {
            DB::table('authors')->insert([
                'name' => $faker->name
            ]);
        }

        foreach (range(1, 200) as $_) {
            DB::table('colors')->insert([
                'color' => $faker->hexcolor,
                'author_id' => $faker->numberBetween(1, 20),
                'rate' => $faker->numberBetween(1, 10)
            ]);
        }

        foreach (range(1, 30) as $_) {
            DB::table('tags')->insert([
                'name' => $faker->cityPrefix . $faker->streetSuffix
            ]);
        }



        foreach (range(1, 20) as $authorId) {

            foreach (range(1, 30) as $tagId) {

            if (!rand(0, 12)) {
                DB::table('author_tags')->insert([
                    'author_id' => $authorId,
                    'tag_id' => $tagId
                ]);
            }

        }


        }






    }
}
