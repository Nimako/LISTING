<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_user')->insert([
            'uuid' =>  Str::uuid(),
            'fullname' => 'Jon Doe',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'status' => 'Active',
        ]);
    }
}
