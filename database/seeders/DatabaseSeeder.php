<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@lab.com',
            'mobile' => '01710327375',
            'is_admin' => true,
            'status' => 1,
        ]);
    }
}
