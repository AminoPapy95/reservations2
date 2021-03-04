<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Locality;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        //Define data
        $localities = [
            ['locality'=>'Bruxelles','postal_code'=>'1000'],
            ['locality'=>'Watermal-Boitsfort','postal_code'=>'1070'],
        ];
        
        //Insert data in the table    
        foreach ($localities as $data) {     
            DB::table('localities')->insert([
                'locality' => $data['locality'],
                'postal_code' => $data['postal_code'],
            ]);
        }
    }
}

