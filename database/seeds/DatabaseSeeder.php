<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         factory(\App\Category::class, 55)->create();
        // factory(\App\User::class, 10)->create();

        // get users
        $faker = \Faker\Factory::create();

        $users = \App\User::all();
        foreach ($users as $user) {
            for ($i=0; $i < 10; $i++) {
                \App\Post::create([
                    'user_id'=>$user->id,
                    'title' => $faker->text('10'),
                    'description' => $faker->paragraph(1),

                ]);
            }
        }

    }
}
