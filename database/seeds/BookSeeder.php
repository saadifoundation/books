<?php

use Illuminate\Database\Seeder;

use App\Book;
use App\Collection;
use App\Level;
use App\User;
use App\Role;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books_data = [
            [
                'title' => 'مینا 1',
                'title_abbr' => 'mina1',
                'cover' => 'covers/mina1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'mina')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
                مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
                مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
                مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
                INTRO,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => 'https://mina.saadifoundation.ir',
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5759815',
                'index_file' => 'indexes/mina1.pdf',
                'sample_file' => 'samples/mina1.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/mina1.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'writer_users' => [
                    User::firstWhere('name_en', 'Reza-Sahraee'),
                    User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                    User::firstWhere('name_en', 'Davoud-Maleklou'),
                    User::firstWhere('name_en', 'Samaneh-Sadeghi'),
                    User::firstWhere('name_en', 'Monire-Shahbaz'),
                    User::firstWhere('name_en', 'Maryam-Soltani'),
                ],
                'other_users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
            ],
            [
                'title' => 'مینا 2',
                'title_abbr' => 'mina2',
                'cover' => 'covers/mina2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'mina')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
                مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
                مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
                مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
                INTRO,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => 'https://mina.saadifoundation.ir',
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5759818',
                'index_file' => 'indexes/mina2.pdf',
                'sample_file' => 'samples/mina2.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/mina2.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                    Level::firstWhere('title_abbr', 'b2'),
                ],
                'writer_users' => [
                    User::firstWhere('name_en', 'Reza-Sahraee'),
                    User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                    User::firstWhere('name_en', 'Davoud-Maleklou'),
                    User::firstWhere('name_en', 'Samaneh-Sadeghi'),
                    User::firstWhere('name_en', 'Monire-Shahbaz'),
                    User::firstWhere('name_en', 'Maryam-Soltani'),
                ],
                'other_users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
            ],
            [
                'title' => 'مینا 3',
                'title_abbr' => 'mina3',
                'cover' => 'covers/mina3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'mina')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
                مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
                مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
                مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
                INTRO,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => 'https://mina.saadifoundation.ir',
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/6221281',
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/mina2.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'writer_users' => [
                    User::firstWhere('name_en', 'Reza-Sahraee'),
                    User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                    User::firstWhere('name_en', 'Monire-Shahbaz'),
                    User::firstWhere('name_en', 'Maryam-Soltani'),
                ],
                'other_users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
            ],
        ];
        foreach ($books_data as $book_data) {
            $book = new Book;
            $book->title = $book_data['title'];
            $book->title_abbr = $book_data['title_abbr'];
            $book->cover = $book_data['cover'];
            $book->collection_id = $book_data['collection_id'];
            $book->intro = $book_data['intro'];
            $book->intro_video = $book_data['intro_video'];
            $book->teaching_video = $book_data['teaching_video'];
            $book->elearning_link = $book_data['elearning_link'];
            $book->bibliography_link = $book_data['bibliography_link'];
            $book->index_file = $book_data['index_file'];
            $book->sample_file = $book_data['sample_file'];
            $book->buying_link = $book_data['buying_link'];
            $book->ebuying_link = $book_data['ebuying_link'];
            $book->audio_link = $book_data['audio_link'];
            $book->save();

            $book->levels()->saveMany($book_data['levels']);

            foreach ($book_data['writer_users'] as $writer_user) {
                $book->users()->save(
                    $writer_user,
                    [
                    'role_id' => Role::firstWhere('title_abbr', 'writer')->id,
                    ]
                );
            }
            foreach ($book_data['other_users'] as $other_user) {
                $book->users()->save(
                    $other_user['model'],
                    [
                    'role_id' => $other_user['role_title']->id,
                    ]
                );
            }
        }
    }
}
