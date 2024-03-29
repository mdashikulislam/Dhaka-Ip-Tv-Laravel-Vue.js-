<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email','admin@gmail.com')->exists()){
            $user = new User();
            $user->name = 'Admin';
            $user->email = 'admin@gmail.com';
            $user->password = Hash::make(12345678);
            $user->save();
        }
    }
}
