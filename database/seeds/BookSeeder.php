<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'مینا 1',
            'title_abbr' => 'mina1',
            'cover' => 'covers/mina1.jpg',
            'collection_id' => 1,
            'intro' => '',
            'intro_video' => '',
            'teaching_video' => '',
            'elearning_link' => '',
            'bibliography_link' => '',
            'index_file' => '',
            'sample_file' => '',
            'buying_link' => '',
            'ebuying_link' => '',
            'audios_link' => '',
        ]);
    }
}
