<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleId= DB::table('rols')->insertGetId([
            'name' => 'administrator',
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin12345'), // Cifrar la contraseña usando Bcrypt
            'rols_id' => $roleId,
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        DB::table('rols')->insert([
            'name' => 'supplier',
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);
        DB::table('rols')->insert([
            'name' => 'customer',
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

    }
}
