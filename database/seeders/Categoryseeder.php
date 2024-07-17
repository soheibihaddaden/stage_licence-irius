<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;


class Categoryseeder extends Seeder
{
  
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Categories::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        
        Categories::create(['name' => 'Agenda']);
        Categories::create(['name' => 'Conferences']);
        Categories::create(['name' => 'Diplomes']);
        Categories::create(['name' => 'soirees']);


        Categories::create(['name' => 'Meilleures histoires CAWEB']);
        Categories::create(['name' => 'Nos EAD']);
        Categories::create(['name' => 'Histoires d\'anciens CAWEB']);

       
        Categories::create(['name' => 'Qui sommes nous?']);
        Categories::create(['name' => 'Membres du Bureau']);
        Categories::create(['name' => 'Nos projets']);


        Categories::create(['name' => 'Partenaires privés']);
        Categories::create(['name' => 'Photos']);
        Categories::create(['name' => 'Partenaires associatifs']);




    
    }
    








     
 
 

}
