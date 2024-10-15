<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $email = 'admin@gmail.com';

        $gravatarUrl = 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '?s=200&d=identicon';

        User::create([
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
            'thumbnail' =>   $gravatarUrl
        ]);
    }
}
