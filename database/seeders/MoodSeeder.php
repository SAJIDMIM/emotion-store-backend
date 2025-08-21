<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mood;

class MoodSeeder extends Seeder
{
    public function run(): void
    {
        Mood::create(['name' => 'happy']);
        Mood::create(['name' => 'stressed']);
        Mood::create(['name' => 'neutral']);
    }
}
