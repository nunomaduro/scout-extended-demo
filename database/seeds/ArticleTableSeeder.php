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
            'body' => "Install - Laracasts provides a free, thorough introduction to Laravel for newcomers to the framework. It's a great place to start your journey."
        ]);

        // Plurals feature
        factory(\App\Article::class)->create([
            'body' => "Laravel Configuration"
        ]);

        // Custom Ranking
        factory(\App\Article::class, 5)->create([
            'body' => "How install Symfony"
        ]);
    }
}
