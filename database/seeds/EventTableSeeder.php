<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Event::class, 50)->create();

        factory(\App\Event::class)->create(['body' => 'This is an event']);
    }
}
