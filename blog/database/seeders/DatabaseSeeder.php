<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Role::factory()->create([
            'name' => 'Admin'
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'User'
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'Editor'
        ]);
    }
}
