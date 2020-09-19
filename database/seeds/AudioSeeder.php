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
                'title' => 'شمارۀ 1',
                'file' => 'audio/mina3/1.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 2',
                'file' => 'audio/mina3/2.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 3',
                'file' => 'audio/mina3/3.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 4',
                'file' => 'audio/mina3/4.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 5',
                'file' => 'audio/mina3/5.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 6',
                'file' => 'audio/mina3/6.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 7',
                'file' => 'audio/mina3/7.mp3',
                'group_name' => 'درس 1',
                'group_order' => 1,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 8',
                'file' => 'audio/mina3/8.mp3',
                'group_name' => 'درس 2',
                'group_order' => 2,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 9',
                'file' => 'audio/mina3/9.mp3',
                'group_name' => 'درس 2',
                'group_order' => 2,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 10',
                'file' => 'audio/mina3/10.mp3',
                'group_name' => 'درس 3',
                'group_order' => 3,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 11',
                'file' => 'audio/mina3/11.mp3',
                'group_name' => 'درس 3',
                'group_order' => 3,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 12',
                'file' => 'audio/mina3/12.mp3',
                'group_name' => 'درس 3',
                'group_order' => 3,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 13',
                'file' => 'audio/mina3/13.mp3',
                'group_name' => 'درس 3',
                'group_order' => 3,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 14',
                'file' => 'audio/mina3/14.mp3',
                'group_name' => 'درس 4',
                'group_order' => 4,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 15',
                'file' => 'audio/mina3/15.mp3',
                'group_name' => 'درس 4',
                'group_order' => 4,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 16',
                'file' => 'audio/mina3/16.mp3',
                'group_name' => 'درس 4',
                'group_order' => 4,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 17',
                'file' => 'audio/mina3/17.mp3',
                'group_name' => 'درس 4',
                'group_order' => 4,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 18',
                'file' => 'audio/mina3/18.mp3',
                'group_name' => 'درس 5',
                'group_order' => 5,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 19',
                'file' => 'audio/mina3/19.mp3',
                'group_name' => 'درس 5',
                'group_order' => 5,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 20',
                'file' => 'audio/mina3/20.mp3',
                'group_name' => 'درس 5',
                'group_order' => 5,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 21',
                'file' => 'audio/mina3/21.mp3',
                'group_name' => 'درس 6',
                'group_order' => 6,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 22',
                'file' => 'audio/mina3/22.mp3',
                'group_name' => 'درس 6',
                'group_order' => 6,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 23',
                'file' => 'audio/mina3/23.mp3',
                'group_name' => 'درس 6',
                'group_order' => 6,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 24',
                'file' => 'audio/mina3/24.mp3',
                'group_name' => 'درس 6',
                'group_order' => 6,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 25',
                'file' => 'audio/mina3/25.mp3',
                'group_name' => 'درس 7',
                'group_order' => 7,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 26',
                'file' => 'audio/mina3/26.mp3',
                'group_name' => 'درس 7',
                'group_order' => 7,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 27',
                'file' => 'audio/mina3/27.mp3',
                'group_name' => 'درس 7',
                'group_order' => 7,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 28',
                'file' => 'audio/mina3/28.mp3',
                'group_name' => 'درس 7',
                'group_order' => 7,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 29',
                'file' => 'audio/mina3/29.mp3',
                'group_name' => 'درس 7',
                'group_order' => 7,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 30',
                'file' => 'audio/mina3/30.mp3',
                'group_name' => 'درس 8',
                'group_order' => 8,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 31',
                'file' => 'audio/mina3/31.mp3',
                'group_name' => 'درس 8',
                'group_order' => 8,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 32',
                'file' => 'audio/mina3/32.mp3',
                'group_name' => 'درس 8',
                'group_order' => 8,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
            ],
            [
                'title' => 'شمارۀ 33',
                'file' => 'audio/mina3/33.mp3',
                'group_name' => 'درس 8',
                'group_order' => 8,
                'book_id' => Book::firstWhere('title_abbr', 'mina3')->id,
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
