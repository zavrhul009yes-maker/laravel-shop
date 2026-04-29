<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        User::insert([
            'name'=>'Рина',
            'email' => 'uuu@gmail.com',
            'password' => '12345678'
        ]);
        Buyer::insert([
            'tel'=>'+7800535362',
            'discount'=> 10,
            'user_id' => 1
        ]);
    }


}
