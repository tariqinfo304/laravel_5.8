<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<10;$i++)
            DB::table('book')->insert([
                'name' => Str::random(10),
                'no_of_book' => rand(),
                'price' => rand(),
                'is_exist' => 1,
                'amount' => 23,
                'level' => 2,
                'description' => Str::random(10),
                 'now_date' => date("y-m-d"),
                  'user_id' => 1,
               
            ]);

        // 'email' => Str::random(10).'@gmail.com',
           // 'password' => bcrypt('password'),
    }
}
