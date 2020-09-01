<?php

use Illuminate\Database\Seeder;

use App\Book;
use App\Collection;
use App\Level;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book;
        $collection = Collection::firstWhere('title_abbr', 'mina');
        $book->title = 'مینا 1';
        $book->title_abbr = 'mina1';
        $book->cover = 'covers/mina1.jpg';
        $book->collection_id = $collection->id;
        $book->intro = '';
        $book->intro_video = '';
        $book->teaching_video = '';
        $book->elearning_link = '';
        $book->bibliography_link = '';
        $book->index_file = 'indexes/mina1.pdf';
        $book->sample_file = 'samples/mina1.pdf';
        $book->buying_link = '';
        $book->ebuying_link = '';
        $book->audios_link = 'audios_zip/mina1.zip';
        $book->save();
        $book->levels()->saveMany([
            Level::firstWhere('title_abbr', 'a'),
            Level::firstWhere('title_Abbr', 'b1'),
        ]);
    }
}
