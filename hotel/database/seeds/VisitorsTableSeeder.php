<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('visitors')->insert([
            'nom' => 'palmer',
            'prenom' => 'eva',
            'telephone' => '0630880400',
            'email' => 'eva@eva.fr',
            'adresse' => '13 rue pasteur',
            'cp' => 26200,
            'password' => '123',
            

        ]);

    }  
       
}
