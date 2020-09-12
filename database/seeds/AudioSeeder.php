<?php

use Illuminate\Database\Seeder;
use App\Audio;
use App\Book;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audios_data = [
            [
                'title' => 'مقدمه',
                'file' => 'audio/mina1/TRACK0.mp3',
                'group_name' => 'مقدمه',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina1')->id,
            ],
            [
                'title' => 'فایل اول',
                'file' => 'audio/mina1/TRACK01.mp3',
                'group_name' => 'درس اول',
                'group_order' => 2,
                'book_id' => Book::firstWhere('title_abbr', 'mina1')->id,
            ],
            [
                'title' => 'فایل دوم',
                'file' => 'audio/mina1/TRACK02.mp3',
                'group_name' => 'درس اول',
                'group_order' => 2,
                'book_id' => Book::firstWhere('title_abbr', 'mina1')->id,
            ],
        ];
        foreach ($audios_data as $audio_data) {
            $audio = new Audio;
            $audio->title = $audio_data['title'];
            $audio->file = $audio_data['file'];
            $audio->group_name = $audio_data['group_name'];
            $audio->group_order = $audio_data['group_order'];
            $audio->book_id = $audio_data['book_id'];
            $audio->save();
        }
    }
}
