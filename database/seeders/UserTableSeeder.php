<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin FIK-LAB',
            'email' => 'admin@fiklab.upnvj.ac.id',
            'password' => bcrypt('adminfiklab')
        ]);
    }
}
