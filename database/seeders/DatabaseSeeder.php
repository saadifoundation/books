<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(AudioSeeder::class);
    }
}
