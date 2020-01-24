<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'nom' => 'palmer',
            'numero' => 1,
            'prix' => 135,
            'type' => 'standard',
            'room_id' => 1,

        ]);
    }
}
