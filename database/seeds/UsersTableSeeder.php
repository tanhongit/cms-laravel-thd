<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('Admin@123'),
        ]);
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => "user{$i}",
                'email' => "user{$i}@gmail.com",
                'password' => bcrypt('User@123'),
            ]);
        }
    }
}
