<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $pages = new Pages();
            $pages->title = $faker->company;
            $pages->content = $faker->text(200);
            $pages->save();
        }
    }
}
