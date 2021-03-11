<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Schema;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users_roles')->truncate();
        Schema::enableForeignKeyConstraints();

        $userRoles = [
            ['role'=>'admin',
                'user'=>'amine'],
        ];

        //Insert data in the table
        foreach ($userRoles as $data) {

            $user = User::firstWhere('firstname',$data['user']);
            $role = Role::firstWhere('role',$data['role']);

            DB::table('users_roles')->insert([
                'user_id' => $user->id,
                'role_id' => $role->id,
            ]);
        }
    }
}
