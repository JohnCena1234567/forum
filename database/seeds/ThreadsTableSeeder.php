<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into threads(title, body, user_id) values(?, ?, ?)', ['Titill A', 'Body A', 1]);
        DB::insert('insert into threads(title, body, user_id) values(?, ?, ?)', ['Titill B', 'Body B', 1]);
        DB::insert('insert into threads(title, body, user_id) values(?, ?, ?)', ['Titill C', 'Body C', 1]);
        DB::insert('insert into threads(title, body, user_id) values(?, ?, ?)', ['Titill D', 'Body D', 1]);
    }
}
