<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('Admin123'),
            'remember_token' => Str::random(10),
            'is_admin' => 1
        ]);
    }
}
