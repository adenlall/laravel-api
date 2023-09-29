<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        $this->call(AnalyticsSeeder::class);
        $this->call(GoalOrAssistSeeder::class);
        $this->call(QuizzesSeeder::class);
    }
}
