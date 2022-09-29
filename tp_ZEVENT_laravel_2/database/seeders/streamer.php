<?php

namespace Database\Seeders;

use App\Models\Streamer;
use Illuminate\Database\Seeder;

class streamer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Streamer::factory()->Count(10)->Create();
    }
}
