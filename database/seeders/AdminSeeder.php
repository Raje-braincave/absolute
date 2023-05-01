<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvent;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$UxwxKJQeGYBUOdQPzEj4JefhBukUxAhsWjyVi8WqP82/SA7KYClGW', // password
        
       ])->assignRole('admin','user');
      
    }
}
