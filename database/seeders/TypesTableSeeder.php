<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use App\Models\Artist;

class TypesTableSeeder extends Seeder
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
        Type::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $types = [
            ['type'=>'auteur'],
            ['type'=>'scénographe'],
            ['type'=>'comédien'],
        ];
        
        //Insert data in the table    
        foreach ($types as $data) {     
            DB::table('types')->insert([
                'type' => $data['type'],
            ]);
        }
    }
}
