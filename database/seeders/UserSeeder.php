<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'          => 'Administrator',
                'username'      => 'admin',
                'password'      => Hash::make('admin123'),
                'address'       => 'Jl. T. Jawa',
                'role_id'       => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'          => 'Nusantara Crafts',
                'username'      => 'user1',
                'password'      => Hash::make('123'),
                'address'       => 'Jl. Dr. Wahidin',
                'role_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'          => 'GreenLeaf Gardens',
                'username'      => 'user2',
                'password'      => Hash::make('123'),
                'address'       => 'Jl. Cokroaminoto',
                'role_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'          => 'Pottery Workshop',
                'username'      => 'user3',
                'password'      => Hash::make('123'),
                'address'       => 'Jl. Ade Irma Suryani',
                'role_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ]);
    }
}
