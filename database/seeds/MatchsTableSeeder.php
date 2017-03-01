<?php

use Illuminate\Database\Seeder;

class MatchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchs')->insert([
            'contender1' => 'ManUtd',
            'contender2' => 'Arsenal',
            'match_status' => 'Upcoming',
        ]);
    }
}
