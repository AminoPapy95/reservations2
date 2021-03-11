<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
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
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $users = [
            [
                'login'=>'amino95',
                'lastname'=>'Amine',
                'firstname'=>'Houssane',
                'langue'=>'français',
                'email'=>'admin@admin.com',
                'password'=>'12345',
                'email_verified_at' => null,
            ],
        ];

        //Insert data in the table
        foreach ($users as $data) {
            DB::table('users')->insert([
                'login' => $data['login'],
                'lastname' => $data['lastname'],
                'firstname' => $data['firstname'],
                'langue' => $data['langue'],
                'email' => $data['email'],
                'password' => $data['password'],
                'email_verified_at' => $data['email_verified_at'],
            ]);
        }
    }
}
