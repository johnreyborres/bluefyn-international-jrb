<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product; 
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::factory()->create([
            'email' => 'testing@acme.com',
            'password' => Hash::make('1234'),
        ]);

        // Products
        Product::factory()->count(5)->create();
    }
}
