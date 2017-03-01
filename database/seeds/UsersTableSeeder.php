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
        DB::table('users')->insert([
            'first_name' => 'gerald',
            'last_name' => 'ikenna',
            'email' => 'frankgerald@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
