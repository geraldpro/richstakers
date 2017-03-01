<?php

use Illuminate\Database\Seeder;

class BetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('bets')->insert([
            'contender1' => 'ManUtd',
            'contender2' => 'Arsenal',
            'prediction' => 'win',
            'stake' => '5000',

        ]);
    }
}
