<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(8)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'class_name' => '10.A',
        ]);

        $activities = Activity::factory()->count(7)->create();

        Post::factory()->count(20)->recycle($activities)->create();

        Post::factory()->create([
            'tevekenyseg_id' => $activities->first()->tevekenyseg_id,
            'osztaly_nev' => '12.A',
            'allapot' => true,
        ]);
    }
}
