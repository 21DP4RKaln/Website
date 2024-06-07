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
                'first_name' => 'Rolands',
                'last_name' => 'Kalnins',
                'email' => 'admin@example.com',
                'phone_number' => '24151515',
                'password' => bcrypt('password'), // or Hash::make('password')
                'is_admin' => true,
            ]);
        }
    }
}





