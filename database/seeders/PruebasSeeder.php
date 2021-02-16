<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 

            DB::table('pruebas')->insert([

                    'dato1'=>Str::random(10),
                    'dato2'=>Str::random(10),
                    'dato3'=>Str::random(10),
                    'dato4'=>Str::random(10),
                    'dato5'=>Str::random(10),

            ]);


        }
    }
}
