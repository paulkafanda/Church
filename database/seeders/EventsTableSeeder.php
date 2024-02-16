<?php

namespace Database\Seeders;

use App\Models\Event;
use Database\Factories\EventFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()
            ->count(10)
        ->create();
    }
}
