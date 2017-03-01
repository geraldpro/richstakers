<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'email' => 'fgnaija@yahoo.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
