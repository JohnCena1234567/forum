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

        DB::table('threads')->insert([
            ['title' => 'Titill A', 'body' => 'Body A', 'user_id' => 1],
            ['title' => 'Titill B', 'body' => 'Body B', 'user_id' => 1],
            ['title' => 'Titill C', 'body' => 'Body C', 'user_id' => 1],
            ['title' => 'Titill D', 'body' => 'Body D', 'user_id' => 1],
            ['title' => 'Titill E', 'body' => 'Body E', 'user_id' => 1],
            ['title' => 'Titill F', 'body' => 'Body F', 'user_id' => 1]
        ]);

        DB::table('leikstjori')->insert([
            ['nafn' => 'Ragnar P. Ragnarsson', 'thjoderni' => 'Island'],
            ['nafn' => 'James Gatez', 'thjoderni' => 'England'],
            ['nafn' => 'Beggi Helga', 'thjoderni' => 'Island'],
            ['nafn' => 'W.C. Bartek', 'thjoderni' => 'Kanada'],
            ['nafn' => 'Wibe Lund', 'thjoderni' => 'Danmork']
        ]);

        DB::table('dvd')->insert([
            ['titill' => 'Vindurinn er blautur', 'adalleikari' => 'Petur Selland', 'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'Spenna', 'leikstjori_id' => 5],
            ['titill' => 'Veididellan er frabaer', 'adalleikari' => 'Gustaf Gustafsson', 'utgafuar' => 1999, 'verd' => 3550, 'flokkur' => 'Sport', 'leikstjori_id' => 1],
            ['titill' => 'Into the Wild', 'adalleikari' => 'John Johnson', 'utgafuar' => 2003, 'verd' => 3770, 'flokkur' => 'Drama', 'leikstjori_id' => 4],
            ['titill' => 'The Strider', 'adalleikari' => 'Biff Holmes', 'utgafuar' => 1960, 'verd' => 4520, 'flokkur' => 'Aevintyri', 'leikstjori_id' => 2]
        ]);
    }
}
