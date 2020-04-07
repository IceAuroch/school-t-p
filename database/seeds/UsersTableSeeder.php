<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        \App\Models\User::create([
            'first_name' => 'Администратор',
            'last_name' => 'Админович',
            'email' => 'admin@app.com',
            'password' => bcrypt('password'),
        ]);
    }
}
