<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Article::class, 50)->create();

        // Stop Words feature.
        factory(\App\Article::class)->create([
            'title' => "Install - Laracasts provides a free, thorough introduction to Laravel."
        ]);

        // Custom Ranking
       factory(\App\Article::class)->create([
            'author' => "Taylor Otwell",
            'title' => "Tutorial Laravel",
            'likes_count' => 9000
        ]);

        factory(\App\Article::class)->create([
            'title' => "Install Laravel"
        ]);

        factory(\App\Article::class)->create([
            'title' => "Configurate Laravel"
        ]);

        factory(\App\Article::class)->create([
            'title' => "Start Laravel"
        ]);

        // Plurals feature
        factory(\App\Article::class)->create([
            'title' => "Configure model",
            'likes_count' => 1000,
        ]);

        factory(\App\Article::class)->create([
            'title' => "Configure models",
            'likes_count' => 2000,
        ]);
    }
}
