<?php

use Illuminate\Database\Seeder;
use App\Comic;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComicTableSeeder::class);
    }
}
