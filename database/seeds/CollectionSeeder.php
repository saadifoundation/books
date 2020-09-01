<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection')->insert([
            'title' => '',
            'title_abbr' => '',
            'intro' => '',
        ]);
    }
}
