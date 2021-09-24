<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserList;
use App\Models\WatchList;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserList::factory()->create();

        // WatchList::factory(10)->create();
    }
}
