<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret'),
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
