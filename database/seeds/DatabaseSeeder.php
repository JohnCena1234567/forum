<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'Artur',
            'email' => 'asd@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
