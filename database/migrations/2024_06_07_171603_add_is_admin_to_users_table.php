<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'admin@example.com')->first();
        if ($user) {
            $user->update(['is_admin' => true]);
        } else {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'), // or Hash::make('password')
                'is_admin' => true,
            ]);
        }
    }
}



