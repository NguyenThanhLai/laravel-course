<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 100) as $index) {
            Posts::create([
                'body' => $faker->paragraph($nbSentences = 3),
                'user_id' => $faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}