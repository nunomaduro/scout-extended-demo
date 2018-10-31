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
            'body' => "Install - Laracasts provides a free, thorough introduction to Laravel."
        ]);

        // Custom Ranking
       factory(\App\Article::class)->create([
            'author' => "Taylor Otwell",
            'body' => "Tutorial Laravel",
            'likes_count' => 9000
        ]);

        factory(\App\Article::class)->create([
            'body' => "Install Laravel"
        ]);

        factory(\App\Article::class)->create([
            'body' => "Configurate Laravel"
        ]);

        factory(\App\Article::class)->create([
            'body' => "Start Laravel"
        ]);

        // Plurals feature
        factory(\App\Article::class)->create([
            'body' => "Configure model",
            'likes_count' => 1000,
        ]);

        factory(\App\Article::class)->create([
            'body' => "Configure models",
            'likes_count' => 2000,
        ]);
    }
}
