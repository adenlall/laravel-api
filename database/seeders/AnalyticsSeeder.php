<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnalyticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['visits', array(
								"total"=> 0,
								"times"=>array(),
								"routes"=>array()
            )],
            ['goal_or_assists', array()],
            ['quizzes', array()],
            ['metadata', array()],
        ];
        for ($i = 0; $i < count($services); $i++) {
            DB::table('analitycs')->insert([
                'key' => $services[$i][0],
                'value' => json_encode($services[$i][1]),
            ]);
        }
    }
}
