<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $posts = [
            [
                'title' => 'rafly diduga ingin koding tapi kepingin tidur',
                'content' => 'diduga dikarekan dia sering begadang membuat dia ingin tidur tepatnya pada sore hari'
            ],
            [
                'title' => 'rafly kepingin nonton drakor malah kepincut anime',
                'content' => 'seperti kita tahu, bahwa trend masa kini yang disebut sebut sebagai wibu ini, kian membludak sehingga menular pada satu anak ini yang bernama rafly'
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
