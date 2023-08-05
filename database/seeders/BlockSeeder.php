<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = Topic::all();
        $topic1 = $topics->find(1);
        $topic20 = $topics->find(20);
        Block::factory()->count(3)->for($topic1)->create();
        // Block::factory()->count(3)->for(Topic::factory()->state(["id" => 1]))->create();
        Block::factory()->count(4)->for($topic20)->create();
        // Block::factory()->count(4)->for(Topic::factory()->state(["id" => 20]))->create();
    }
}
