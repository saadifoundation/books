<?php

use Illuminate\Database\Seeder;

use App\Book;
use App\Collection;
use App\Level;
use App\User;
use App\Role;
use App\Tag;
use App\Status;

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
            //mina1
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
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
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
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Samaneh-Sadeghi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //mina2
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
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
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
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Samaneh-Sadeghi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //mina3
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
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => 'https://mina.saadifoundation.ir',
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/6221281',
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/mina3.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //mina4
            [
                'title' => 'مینا 4',
                'title_abbr' => 'mina4',
                'cover' => 'covers/mina4.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'mina')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
                مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
                مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
                مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => 'https://mina.saadifoundation.ir',
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b3'),
                    Level::firstWhere('title_abbr', 'c1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Afsaneh-Gharibi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //enjoyreading1
            [
                'title' => 'لذت خواندن 1',
                'title_abbr' => 'enjoyreading1',
                'cover' => 'covers/enjoyreading1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'enjoyreading')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید از یادگیری زبان فارسی لذت ببرید، باید مهارت خواندن خود را تقویت کنید. این کتاب، با بهره‌گیری از اصول و مهارت‌های آموزشی مناسب، به شما کمک می کند تا:
                به کمک دانش قبلی خودتان فارسی را یاد بگیرید،
                دامنۀ واژگان خود را تقویت کنید،
                خودتان معنی متن را تشخیص دهید،
                سرعت خواندنتان را افزایش دهید و
                بدون کمک دیگران، هر متنی را به زبان فارسی بخوانید.
                متن های این کتاب بسیار جذاب و همه پسند و تصاویر درس ها نیز، اصیل، دیدنی و چشم نواز هستند. طراحی زیبای کتاب، لذت خواندن آن را دوچندان کرده است. در هر درس، دو مهارت برای تقویت خواندن و واژه معرفی شده است. یادگیری این مهارت ها به شما کمک خواهد کرد بدون نیاز به کمک دیگران، با دنیای زبان فارسی ارتباط برقرار کنید و از لذت دائمی آن بهره مند شوید. 
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/enjoyreading1.pdf',
                'sample_file' => 'samples/enjoyreading1.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/enjoyreading1.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                ],
            ],
            //enjoyreading2
            [
                'title' => 'لذت خواندن 2',
                'title_abbr' => 'enjoyreading2',
                'cover' => 'covers/enjoyreading2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'enjoyreading')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید از یادگیری زبان فارسی لذت ببرید، باید مهارت خواندن خود را تقویت کنید. این کتاب، با بهره‌گیری از اصول و مهارت‌های آموزشی مناسب، به شما کمک می کند تا:
                به کمک دانش قبلی خودتان فارسی را یاد بگیرید،
                دامنۀ واژگان خود را تقویت کنید،
                خودتان معنی متن را تشخیص دهید،
                سرعت خواندنتان را افزایش دهید و
                بدون کمک دیگران، هر متنی را به زبان فارسی بخوانید.
                متن های این کتاب بسیار جذاب و همه پسند و تصاویر درس ها نیز، اصیل، دیدنی و چشم نواز هستند. طراحی زیبای کتاب، لذت خواندن آن را دوچندان کرده است. در هر درس، دو مهارت برای تقویت خواندن و واژه معرفی شده است. یادگیری این مهارت ها به شما کمک خواهد کرد بدون نیاز به کمک دیگران، با دنیای زبان فارسی ارتباط برقرار کنید و از لذت دائمی آن بهره مند شوید. 
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/4513411',
                'index_file' => 'indexes/enjoyreading2.pdf',
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                    Level::firstWhere('title_abbr', 'b2'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'co-writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                ],
            ],
            //enjoyreading3
            [
                'title' => 'لذت خواندن 3',
                'title_abbr' => 'enjoyreading3',
                'cover' => 'covers/enjoyreading3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'enjoyreading')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید از یادگیری زبان فارسی لذت ببرید، باید مهارت خواندن خود را تقویت کنید. این کتاب، با بهره‌گیری از اصول و مهارت‌های آموزشی مناسب، به شما کمک می کند تا:
                به کمک دانش قبلی خودتان فارسی را یاد بگیرید،
                دامنۀ واژگان خود را تقویت کنید،
                خودتان معنی متن را تشخیص دهید،
                سرعت خواندنتان را افزایش دهید و
                بدون کمک دیگران، هر متنی را به زبان فارسی بخوانید.
                متن های این کتاب بسیار جذاب و همه پسند و تصاویر درس ها نیز، اصیل، دیدنی و چشم نواز هستند. طراحی زیبای کتاب، لذت خواندن آن را دوچندان کرده است. در هر درس، دو مهارت برای تقویت خواندن و واژه معرفی شده است. یادگیری این مهارت ها به شما کمک خواهد کرد بدون نیاز به کمک دیگران، با دنیای زبان فارسی ارتباط برقرار کنید و از لذت دائمی آن بهره مند شوید. 
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/enjoyreading3.pdf',
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                ],
            ],
            //enjoyreading4
            [
                'title' => 'لذت خواندن 4',
                'title_abbr' => 'enjoyreading4',
                'cover' => 'covers/enjoyreading4.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'enjoyreading')->id,
                'intro' => <<<INTRO
                اگر می‌خواهید از یادگیری زبان فارسی لذت ببرید، باید مهارت خواندن خود را تقویت کنید. این کتاب، با بهره‌گیری از اصول و مهارت‌های آموزشی مناسب، به شما کمک می کند تا:
                به کمک دانش قبلی خودتان فارسی را یاد بگیرید،
                دامنۀ واژگان خود را تقویت کنید،
                خودتان معنی متن را تشخیص دهید،
                سرعت خواندنتان را افزایش دهید و
                بدون کمک دیگران، هر متنی را به زبان فارسی بخوانید.
                متن های این کتاب بسیار جذاب و همه پسند و تصاویر درس ها نیز، اصیل، دیدنی و چشم نواز هستند. طراحی زیبای کتاب، لذت خواندن آن را دوچندان کرده است. در هر درس، دو مهارت برای تقویت خواندن و واژه معرفی شده است. یادگیری این مهارت ها به شما کمک خواهد کرد بدون نیاز به کمک دیگران، با دنیای زبان فارسی ارتباط برقرار کنید و از لذت دائمی آن بهره مند شوید. 
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/enjoyreading4.pdf',
                'sample_file' => 'samples/enjoyreading4.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/enjoyreading4.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b3'),
                    Level::firstWhere('title_abbr', 'c1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                ],
            ],
            //iranology1
            [
                'title' => 'ایران‌شناسی 1',
                'title_abbr' => 'iranology1',
                'cover' => 'covers/iranology1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'iranology')->id,
                'intro' => <<<INTRO
                جلد اول مجموعۀ ایران‌شناسی، بر مبنای سرفصل‌های رشتۀ ایران‌شناسی در داخل ایران و متناسب با علائق فارسی‌آموزان خارجی و اهداف آن‌ها، مشتمل بر 7 فصل و 28 درس طراحی گردید. در همین مرحله، جلسات مشترکی با بنیاد ایران‌شناسی، به عنوان نهاد تخصصی مرتبط با این موضوع برگزار شد و مقرر شد محتوای اولیۀ مورد نیاز برای همۀ دروس توسط این بنیاد ارائه گردد. بنیاد ایران‌شناسی نیز ضمن حمایت کامل متن‌های مورد نیاز را که هر یک بین 350 تا 500 واژه بود تهیه و در اختیار بنیاد سعدی قرار داد.
                در گام پایانی، فرایند تولید محتوای آموزشی در قالب برنامۀ درسی محتوامحور (Content-Based Syllabus) آغاز گردید. در این برنامۀ درسی، هدف اصلی انتقال مفهوم و محتوای درسی (یعنی آشنایی با ایران) است و یادگیری زبان فارسی یکی از پیامدهای این آموزش محسوب می‌شود. در این شیوۀ آموزشی، برای تولید هر درس، فرایندی علمی و حساب‌شده اجرا می‌شود. این فرایند از آموزشی کردن محتوا تا تولید تمرین‌های آماده‌سازی و تمرین‌های تکمیلی پیش می‌رود. لذا هر درس در این قالب آموزشی شامل بخش آماده‌سازی، متن اصلی و تمرین‌های درک مطلب و درک واژه و خلاقیت فردی است. واژه‌های اصلی هر درس، به همراه تصاویر اصیل و جذاب، پیش از متن اصلی معرفی شده‌اند. متن اصلی در درس‌هاس اول حدود 250 کلمه است و به تدریج تعداد این واژه‌ها به 450 واژه می‌رسد. محتوای متن‌ها به گونه‌ای تنظیم شده‌است که فارسی‌آموز می‌تواند حتی بدون کمک دیگران پیام آن‌ها را درک نماید. تمرین‌های پس از متن اصلی، از ساده به مشکل تنظیم شده‌اند و قالب آن‌ها در تمام دروس یکسان است. برای افزایش خلاقیت فردی مخاطبان، تلاش شده‌است متناسب با محتوای درس، دانش عمومی آن‌ها از کشور خودشان نیز فعال گردد و از این طریق ضمن تعمیق یادگیری آن‌ها، پیام متن نیز بهتر منتقل گردد.
                این کتاب برای فارسی‌آموزان سطح B1  و B2 در چارچوب شش‌سطحی اروپایی طراحی شده‌است و مخاطب اصلی آن دانشجویان خارجی رشتۀ ایران‌شناسی و شرق‌شناسی و شرکت‌کنندگان سطح میانی و پیشرفتۀ دوره‌های دانش‌افزایی داخل ایران هستند. فارسی‌آموزان این سطح مفهوم اصطلاحات و واژه‌های پرکاربرد را می‌دانند و قادرند متن‌های ساده و کوتاه مرتبط با موضوع را بفهمند و حتی می‌توانند متن‌های ساده و منسجم مثل یک نامه یا یک گزارش توصیفی را بنویسند. پس از آموزش این کتاب آن‌ها قادر خواهند بود مقاله‌ها یا گزارش‌هایی را که دربارۀ ایران است به راحتی بخوانند و سخنرانی‌های مرتبط با موضوع ایران و ویژگی‌های آن را بفهمند. آن‌ها هم‌چنین، قادر خواهند بود در مورد موضوعات مورد علاقه‌شان اظهارنظرکنند و یا نظر شخصی‌شان را دربارۀ این موضوعات و اتفاقات مرتبط با آن‌ها بنویسند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5111816',
                'index_file' => 'indexes/iranology1.pdf',
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/iranology1.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                    Level::firstWhere('title_abbr', 'b2'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Zohreh-Shirinbakhsh'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'iranology',
                ],
            ],
            //iranology2
            [
                'title' => 'ایران‌شناسی 2',
                'title_abbr' => 'iranology2',
                'cover' => 'covers/iranology2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'iranology')->id,
                'intro' => <<<INTRO
                گروه تألیف مجموعۀ ایران‌شناسی پس از بررسی نقاط قوت و ضعف جلد اول کتاب ایران‌شناسی، تغییراتی در محتوای جلد دوم و ساختار درس‌ها ایجاد کرد. هر درس از جلد دوم کتاب ایران‌شناسی شامل بخش‌های آماده‌سازی، پرسش‌های پیش از خواندن، پرسش‌های حین خواندن، متن اصلی، تمرین‌های درک مطلب، تمرین‌های تولیدی و خلاقیت فردی است. برای افزایش خلاقیت فردی مخاطبان، تلاش شده‌است متناسب با محتوای درس، دانش عمومی آنها از کشور خودشان نیز فعال گردد و از این طریق ضمن تعمیق یادگیری آنها، پیام متن نیز بهتر منتقل گردد. متن اصلی درس‌های کتاب بین 500 تا 700  کلمه است.
                این کتاب برای فارسی‌آموزان سطح C1  و C2 در چارچوب شش‌سطحی اروپایی طراحی شده‌است و مخاطب اصلی آن دانشجویان خارجی رشتۀ ایران‌شناسی و شرق‌شناسی و شرکت‌کنندگان سطح پیشرفتۀ دوره‌های دانش‌افزایی داخل ایران هستند. فارسی‌آموزان این سطح می‌توانند متون بسیاری از ژانرهای مرتبط با موضوعات گسترده را، چه آشنا و چه ناآشنا درک کنند. در این سطح زبان‌آموزان قادر به تفسیر متن با کمک سرنخ‌های متنی و فرازبانی هستند و متون دارای اختصار با واژه‌های تخصصی و ساختار دستوری پیچیده را به خوبی متوجه می‌شوند.  پس از آموزش این کتاب آنها توانایی درک متون طولانی با ماهیت تخصصی و دانشگاهی را دارند و می‌توانند مقالات تخصصی و فنی را بخوانند، درک کنند و دربارۀ آنها صحبت کنند.
                از ویژگی‌های متفاوت جلد دوم در مقایسه با جلد اول می‌توان به موارد زیر اشاره کرد:
                • در این کتاب از آنجا که متن‌ها بیشتر جنبۀ تخصصی دارند، جزئیات بیشتری در متن ارائه می‌شود و همین‌طور اسامی خاص بیشتری در متن ذکر می‌شود اما این اسامی در میزان دشواری متن و درک مطلب تأثیری ندارند زیرا در پرسش‌های درک مطلب تعداد پرسش‌هایی که به این اسامی مربوط هستند، اندک است. 
                • مبنای تاریخ در متن‌های این کتاب تاریخ هجری‌خورشیدی است و به همین دلیل «هجری‌خورشیدی» در متن ذکر نشده است. البته در مواردی نیاز به ذکر تاریخ بر مبنای «هجری‌قمری» یا «میلادی» بوده که در این موارد مبنای تاریخ در متن آمده‌است.
                • واژه‌های اصلی هر درس در بخش واژه‌نامه در انتهای کتاب معرفی می‌شوند. 
                • برای سهولت درک برخی از واژه‌ها، واژه‌نامۀ تصویری نیز در انتهای کتاب گنجانده شده‌است. در این بخش تصویر واژه‌هایی که توضیح‌دادن معنی آنها ممکن نبوده و یا معنی واژه‌ها کمکی به درک آنها نمی‌کرد، آورده شده‌اند. 
                • منابع مورداستفاده برای هر متن به‌صورت مجزا در بخش منابع در انتهای کتاب گردآوری شده‌است.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/iranology2.pdf',
                'sample_file' => 'samples/iranology2.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => 'audio_zip/iranology2.zip',
                'levels' => [
                    Level::firstWhere('title_abbr', 'b3'),
                    Level::firstWhere('title_abbr', 'c1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Monire-Shahbaz'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Zeinab-Mortezaeifar'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammd-Mehraabi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'iranology',
                ],
            ],
            //en1ststep
            [
                'title' => 'گام اول انگلیسی',
                'title_abbr' => 'en1ststep',
                'cover' => 'covers/en1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">In learning Persian, the first step is very important, even vital. In this first step, Persian learners should become accustomed to the language In order to enjoy learning it. If Persian learners are presented with a transparent and clear picture of the language, they are more likely to learn it with speed and enjoyment. The book First Step Persian focuses on this goal and was written relying on the rich and varied experiences of Persian teachers and professors in Iran and abroad. The most important purpose of First Step Persian is to make learners use Persian from the very beginning of the learning process. All tasks are communicative; as a result, each task requires a focused, linguistic performance. 
                First Step Persian is language-oriented and covers all the necessary language skills. In a time-frame of 40 to 60 teaching hours, it familiarizes learners with the necessary words, functions, concepts and the basic, most frequently used structures in Persian. 
                In First Step Persian, Persian is learnt through doing. By the end of this book, learners can speak, read and write Persian. 
                Take the First Step with pleasure: the first step is half the job done.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/en1ststep.pdf',
                'sample_file' => 'samples/en1ststep.pdf',
                'buying_link' => 'http://book.atu.ac.ir/book_567.html',
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Sofia-Koutlaki'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hoda-Salimi'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //ar1ststep
            [
                'title' => 'گام اول عربی',
                'title_abbr' => 'ar1ststep',
                'cover' => 'covers/ar1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                الخطوة الأولى
                مستوى المبتدئين
                تعتبر الخطوة الأولی (گام اول) مهمة جدا في تعلم اللغة الفارسية. ففي هذه الخطوة على المتعلم أن يستأنس بهذه اللغة ليتمتع بتعلمها. فإن حظي منذ البداية برؤية واضحة وشفافة عن هذه اللغة، ازداد تقدمه في التعلم بسرعة وشعر بلذة بالغة.إن کتاب گام اول «الخطوة الأولى) تم تدوينه لهذا الهدف وبالاعتماد على تجارب متعلمي اللغة الفارسية و أساتذتها المتحصلة على مدى عدة أعوام في إيران و خارجها. فالهدف الرئيس من هذا الكتاب توظيف المتعلم للغة الفارسية منذ بداية تعلمها. فجميع واجبات الكتاب تمت صياغتها على المنهج التواصلي. لأن ممارستهاتتطلب نشاط الغوياهادئا. فالكتاب هذا يتمحور على أساس اللغة ويركز على المهارات اللغوية. ويتعرف المتعلم من خلال 40 إلى 60 ساعة دراسية على المفردات والاستخدامات والمفاهيم والأبنية اللغوية الفارسية الدارجة. وفي هذا الكتاب يتم تعلم اللغة الفارسية بطريقة توظيفية، تمكن المتعلم في نهاية المطاف من المحادثة والقراءة والكتابة بالفارسية. عليكم أن تخطو الخطوة الأولى بمتعة لأن البدأ بالشيء نصف إكماله.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5069352',
                'index_file' => 'indexes/ar1ststep.pdf',
                'sample_file' => 'samples/ar1ststep.pdf',
                'buying_link' => 'https://khamooshbook.com/product/%da%af%d8%a7%d9%85-%d8%a7%d9%88%d9%84-%d8%b9%d8%b1%d8%a8%db%8c-%d8%af%d8%b1-%db%8c%d8%a7%d8%af%da%af%db%8c%d8%b1%db%8c-%d8%b2%d8%a8%d8%a7%d9%86-%d9%81%d8%a7%d8%b1%d8%b3%db%8c/',
                'ebuying_link' => 'https://taaghche.com/book/56277',
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Masoud-Fekri'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //de1ststep
            [
                'title' => 'گام اول آلمانی',
                'title_abbr' => 'de1ststep',
                'cover' => 'covers/de1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Beim Persischlernen ist der erste Schritt sehr wichtig, denn hier macht sich der Sprachschüler mit der persischen Sprache grundsätzlich vertraut. Wenn Persischlernende von Anfang an eine klare und eindeutige Vorstellungvon der persischen Sprache vermittelt bekommen, fällt ihnen das Lernen von Anfang an leicht und ihr Interesse an der persischen Sprache kann sich ungehindert entfalten.
                „Der erste Schritt“ ist ein Buch, das mit der Hilfe erfahrener Lehrer und Dozenten entstanden ist und genau dieses Ziel verfolgt.
                Die Autoren haben sich dem Grundsatz verschrieben, gleich von Anfang an die persische Sprache zu verwenden. Die Aufgaben sind immer auf Kommunikation ausgerichtet und erfordern zur Lösung einegezielte sprachliche Handlung.
                „Der erste Schritt“ ist sprachorientiert und bindet von Anfang an alle sprachliche Fertigkeiten ein. Innerhalb von 40- 60 Unterrichtsstunden werden den Schülern ein Grundwortschatz sowie die Funktionen, die Bedeutungen und die grundlegenden, gängigen Strukturen der persischen Sprache vermittelt.
                Die im „ersten Schritt“ erworbenen Sprachkenntnisse sind unmittelbar praktisch einsetzbar und versetzen den Schüler in die Lage, am Ende Persisch zu sprechen, zu lesen und auch zu schreiben.
                Wir wollen Sie ermutigen, den „ersten Schritt“ mit Freude anzugehen, denn ist einmal der Anfang gemacht, ist die Sache schon halb gewonnen.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/de1ststep.pdf',
                'sample_file' => 'samples/de1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Melika-Torkaman'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //fr1ststep
            [
                'title' => 'گام اول فرانسوی',
                'title_abbr' => 'fr1ststep',
                'cover' => 'covers/fr1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Pour l’apprentissage d’une langue étrangère comme le persan, la première mesure à prendre est très importante. Les étudiants apprennent mieux quand ils sont habitués à employer les mots qu’ils découvrent. Il faut leur montrer une image palpable de la langue persane afin qu’elle soit agréable à utiliser. Pour atteindre ce but, La première étape pour apprendre le persan est rédigée en s’appuyant sur une myriade d’expériences d’enseignants en Iran et des professeurs à l’étranger. L’objectif principal de ce livre réside dans la nécessité d’utiliser le persan dès le début du processus d’apprentissage. En favorisant les tâches communicatives, cette méthode permet aux apprenants d’utiliser la langue cible.
                La première étape pour apprendre le persan couvre les quatre compétences linguistiques. Il enseigne aux apprenants les mots nécessaires, les fonctions, les concepts et les structures les plus utilisés dans la langue persane dans 40-60 heures.
                La première étape pour apprendre le persan aide les étudiants apprennent mieux en utilisant la langue. Quand le livre est terminé, ils peuvent parler, lire et écrire la langue persane.
                Faites la première étape avec plaisir et vous serez à mi-chemin du but.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/fr1ststep.pdf',
                'sample_file' => 'samples/fr1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hamideh-Latifinia'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hoda-Salimi'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //ur1ststep
            [
                'title' => 'گام اول اردو',
                'title_abbr' => 'ur1ststep',
                'cover' => 'covers/ur1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/ur1ststep.pdf',
                'sample_file' => 'samples/ur1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Farzane-Aazamlotfi'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Falihe-Zahrakazemi'),
                        'role_title' => Role::firstWhere('title_abbr', 'scientific-supervisor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //zh1ststep
            [
                'title' => 'گام اول چینی',
                'title_abbr' => 'zh1ststep',
                'cover' => 'covers/zh1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">学习波斯语,关键在于走好“第一步”。波斯语学习者只有在这一阶段逐步熟悉波 斯语、了解波斯语,才能获得学习的乐趣。如果学生们从一开始就能对波斯语有一个清 晰的认识,那么学习起来就更加得心应手。这正是我们出版《第一步》的初衷。《第一 步》吸收了多年来伊朗国内外广大波斯语师生的丰富经验编写而成,旨在让波斯语学习 者一开始就使用波斯语。课本中所有的练习都是彼此联系的,因为完成每项练习都需要 一种有目的语言行为。
                《第一步》以语言为核心,从一开始就注重各项语言能力的训练。在本书 40 到 60 个学时的学习过程中,学生将了解波斯语的词汇、语法功能、概念和高频的基础句型。
                《第一步》通过“学以致用”的方式来实现波斯语教学。在结束本书的学习后,学 生将能够轻松使用波斯语进行对话、阅读和写作。
                现在,请您轻轻翻开《第一步》吧,好的开始将是成功的一半!</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/zh1ststep.pdf',
                'sample_file' => 'samples/zh1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Yugvili'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //bn1ststep
            [
                'title' => 'گام اول بنگالی',
                'title_abbr' => 'bn1ststep',
                'cover' => 'covers/bn1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">ফারসি ভাষা শিখার ক্ষেত্রে গামে আউয়াল (ফারসি ভাষা শিখার প্রথম পদক্ষেপ) গ্রন্থটি খুবই গুরুত্বপূর্ণ। এই পদক্ষেপে ফারসি শিক্ষার্থীদের অবশ্যই এ ভাষার স্বাদ আস্বাদনে আকৃষ্ট করে তুলবে। যদি শিক্ষার্থী শুরু থেকেই ফারসি ভাষার স্বচ্ছ এবং উজ্জ্বল চিত্র খুঁজে পায়, তবে তা দ্রুত এবং আন্তরিকতার সাথে শিখতে পারবে এবং প্রচুর স্বাদ আস্বাদন করতে পারবে। গামে আউয়াল এমন একটি গ্রন্থ যা- এই উদ্দেশ্যে ইরান ও ইরানের বাইরের ফারসি শিক্ষক-শিক্ষার্থীদের কয়েক বছরের অর্জিত অভিজ্ঞতার আলোকে তা সংকলিত হয়েছে। এই গ্রন্থের গুরুত্বপূর্ণ উদ্দেশ্য হচ্ছে ফারসি শিক্ষার্থী শুরু থেকেই ফারসি ভাষা ব্যবহার করবে। এই গ্রন্থের সব অনুশীলনী প্রথম থেকে শেষ পর্যন্ত পারস্পরিক সংযুক্ত। কেননা এর প্রত্যেকটি ভাষা শিখার উদ্দেশ্য ও প্রয়োজনকে সামনে রেখে সম্পন্ন করা হয়েছে। 
                গামে আউয়াল ভাষার এমন একটি কেন্দ্র যা শুরু থেকেই ভাষার দক্ষতাকে সবার নিকট বোধগম্য করে তুলবে। এই গ্রন্থটি ৪০ থেকে ৬০ ঘন্টার শিক্ষা কোর্স, যা ফারসি ভাষা শিক্ষার্থীদের ফারসি ভাষার শব্দাবলির ব্যবহার, তাৎপর্য ও মৌলিক গঠন পুণরাবৃত্তির সাথে পরিচিত করবে। 
                গামে আউয়াল-এ ফারসি ভাষা কার্যকর পদ্ধতিতে শিখানো হয়েছে এবং ফারসি শিক্ষার্থীগণ গ্রন্থ-অন্তে ফারসি ভাষায় কথা বলতে এবং পড়তে পারবে। এমনকি লিখতেও পারবে। 
                প্রথম পদক্ষেপ উপভোগ কর, কেননা প্রত্যেক কাজের সূচনাই তার অর্ধেক।</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/bn1ststep.pdf',
                'sample_file' => 'samples/bn1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-AbukalamSarkar'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //da1ststep
            [
                'title' => 'گام اول دانمارکی',
                'title_abbr' => 'da1ststep',
                'cover' => 'covers/da1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Når man lærer persisk, er det første skridt meget vigtigt, faktisk afgørende. Ved dette første skridt bliver den, der lærer persisk, fortrolig med sproget med det formål at nyde den videre indlæring. Hvis man bliver præsenteret for det persisk sprog på en klar og gennemskuelig måde, vil man efter al sandsynlighed lære det hurtigt og med glæde. Bogen Persiskundervisning, det første skridt er skrevet med dette mål for øje, og bogen er skrevet på grundlag af de mange og forskellige erfaringer, persiskundervisere har gjort sig Iran og i lande uden for Iran. Det vigtigste formål med Persiskundervisning, det første skridt er at få de persiskstuderende til at bruge det persiske sprog fra den første dag i deres undervisningsforløb. Alle opgaver og handlinger er kommunikative, og hvert skridt kræver en fokuseret sproglig handling.
                Persiskundervisning, det første skridt er sprogorienteret og dækker alle aspekter af sprogbrugen. Inden for en timehorisont på 40 til 60 undervisningstimer gør bogen den studerende fortrolig med de nødvendige gloser, begreber samt de mest basale og oftest brugte sprogstrukturer i persisk
                I Persiskundervisning, det første skridt læres persisk ved at blive anvendt, og efter endt gennemgang af bogen kan de studerende tale, læse og skrive persisk. Tag det første skridt med glæde og fornøjelse. Godt begyndt er halvt fuldendt.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/da1ststep.pdf',
                'sample_file' => 'samples/da1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Klaus-Peterson'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //ru1ststep
            [
                'title' => 'گام اول روسی',
                'title_abbr' => 'ru1ststep',
                'cover' => 'covers/ru1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Первые шаги очень важны в изучении персидского языка — ведь  именно освоив их, обучающийся начинает получать удовольствие от  учебного процесса. Если в самом начале обучения он уже точно  представляет, как устроен персидский язык, то впитывает новые знания  значительное быстрее. Учебник «Первый шаг» — результат многолетнего  опыта обучения персидскому языку как в самом Иране, так и в других  странах. Основная цель книги — с самого начала научить студента  использованию языка фарси на практике. Все задания учебника связаны  между собой, таким образом, выполнение любого задания требует  прикладывания языковых усилий и знания пройденного материала.  
                «Первый шаг» уделяет внимание развитию всех языковых навыков:  чтения, говорения, аудирования и письма. Учебник рассчитан на 40-60 часов  аудиторных занятий, он знакомит обучающихся с базовой лексикой и  грамматикой персидского языка. 
                Данный учебник преподносит обучающимся персидский язык с  немедленной отработкой материала на практике, поэтому в конце курса  обучающийся уже способен разговаривать, читать и даже писать на фарси. 
                Сделайте «Первый шаг» с удовольствием, ведь начало — это уже  полдела!</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/ru1ststep.pdf',
                'sample_file' => 'samples/ru1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Shafaghi'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //sr1ststep
            [
                'title' => 'گام اول صربی',
                'title_abbr' => 'sr1ststep',
                'cover' => 'covers/sr1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/sr1ststep.pdf',
                'sample_file' => 'samples/sr1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Liliana-Markowic'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //es1ststep
            [
                'title' => 'گام اول اسپانیایی',
                'title_abbr' => 'es1ststep',
                'cover' => 'covers/es1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Primeros pasos es una obra sumamente importante para el aprendizaje de la lengua persa. En esta primera etapa el estudiante de persa debe acostumbrarse a esta lengua, para poder disfrutar aprendiéndola. Si desde el principio el alumno tiene una imagen clara de la lengua persa, disfrutará más estudiándola y la aprenderá con mayor velocidad. Primeros pasos es un libro escrito para tal propósito, basado en las experiencias recogidas durante años por profesores de este idioma tanto en Irán como en todo el mundo. Este libro tiene como primer objetivo que el alumno utilice la lengua persa desde los mismos inicios de su aprendizaje. Todos los ejercicios del libro son de carácter comunicacional por cuanto para poder realizarlos es menester una interacción lingüística.
                Primeros pasos es un método que se fundamenta en la propia lengua al punto que desde el mismo inicio tiene en cuenta todos los planos del idioma. Esta obra, pensada para impartirse entre 40 y 60 horas lectivas, presenta al alumno novel las palabras, usos, conceptos y estructuras más básicas y más frecuentes de la lengua persa.
                Con Primeros pasos se enseña persa a través de su uso y, al finalizar el libro, el estudiante podrá hablarla, leerla e, incluso, escribirla.
                Disfrute comenzado el aprendizaje del persa con Primeros pasos, pues el comienzo de toda empresa es la mitad del trabajo.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/es1ststep.pdf',
                'sample_file' => 'samples/es1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //tr1ststep
            [
                'title' => 'گام اول ترکی',
                'title_abbr' => 'tr1ststep',
                'cover' => 'covers/tr1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Farsça öğreniminde ilk adım fazlasıyla önem taşımaktadır. Bu adımda Farsça öğrenen kişinin öğrendiği dilden zevk alabilmesi için dile alışması gereklidir. Eğer Farsça öğrenecek kişi baştan itibaren Farsçayı kafasında açık ve net bir şekilde canlandırabilirse onu daha hızlı ve zevkli bir biçimde öğrenir. İlk Adım kitabı, bu hedef ile yurtiçi ve yurtdışında Farsça öğreten okutmanların yıllar yılı elde ettiği tecrübelere dayanılarak hazırlanmıştır. Bu kitabın en önemli hedefi, Farsça öğrenenlerin dil öğrenimine başlamarıyla birlikte Farsçayı kullanmalarını sağlamaktır. Kitaptaki bütün etkinlikler iletişimler yaklaşıma göre hazırlanmış olup her birinin yapılmasıyla bir dil becerisinin geliştirilmesi hedeflenmiştir.
                İlk Adım’da yaşayan dil temele alınarak başlanğıçtan itibaren bütün dil becerileri göz önünde bulundurulmuştur. Bu kitap aracılığıyla 40 ila 60 saatlik bir eğitim sürecinde hedef kitle bir takım kelimeler, günlük kullanımlar ve Farsçanın temel ve sık kullanılan yapıları ile tanıştırılmaktadır.
                İlk Adım’da, Farsça kullanılarak öğrenilmektedir ve Farsça öğrenen kitabın bitiminde Farsça konuşabilir, okuyabilir hatta yazabilir. 
                İlk adımı zevkle atınız zira başlamak bitirmenin yarısıdır.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/tr1ststep.pdf',
                'sample_file' => 'samples/tr1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //tg1ststep
            [
                'title' => 'گام اول تاجیک',
                'title_abbr' => 'tg1ststep',
                'cover' => 'covers/tg1ststep.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', '1ststep')->id,
                'intro' => <<<INTRO
                <div dir="ltr">Дар ёдгирии забони форсӣ гоми аввал бисёр муҳим ва ҳаётӣ аст. Дар ин гом форсиомӯз бояд бо забони форсӣ маънус шавад, то аз ёдгирии он лаззат бибарад. Агар форсиомӯз аз ибтидо тасвири шаффофу равшане аз забони форсӣ пайдо кунад, онро бо суръату лаззати фаровон ёд мегирад. «Гоми аввал» китобест, ки бо ҳамин ҳадаф ва бо иттако ба таҷрибаи чандинсолаи омӯзгорону устодони забони форсӣ, дар дохил ва хориҷ аз Эрон таълиф шудааст. Муҳимтарин ҳадафи китоб ин аст, ки форсиомӯз аз ибтидо забони форсиро ба кор бибарад. Ҳамаи таклифҳои китоб иртиботӣ ҳастанд, зеро анҷоми ҳар як аз онҳо мусталзими як куниши забонии ҳадафманд аст.
                «Гоми аввал» забони меҳвар аст ва аз ибтидо ба ҳамаи маҳоратҳои забон таваҷҷуҳ мекунад. Ин китоб дар тӯли 40 то 60 соати омӯзишӣ, форсиомӯзро бо вожаҳо, коркардҳо, мафоҳим ва сохтҳои поя ва пурбасомади забони форсӣ ошно мекунад.
                Дар «Гоми аввал» забони форсӣ аз тариқи бакоргирии он омӯхта мешавад ва форсиомӯз дар поёни китоб метавонад ба забони форсӣ ҳарф бизанад, бихонад ва ҳатто бинависад.
                «Гоми аввал»-ро бо лаззат бардоред, зеро шурӯъи ҳар кор нисфи он аст.</div>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/tg1ststep.pdf',
                'sample_file' => 'samples/tg1ststep.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'n'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Davoud-Maleklou'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'alphabetic',
                ],
            ],
            //persianframe1
            [
                'title' => 'چارچوب 1',
                'title_abbr' => 'persianframe1',
                'cover' => 'covers/persianframe1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianframe')->id,
                'intro' => <<<INTRO
                جلد نخست از مجموعۀ «چارچوب»، دستور زبان فارسی را برای فارسی‌آموزان خارجی در سطح مقدماتی و پیش‌میانی آموزش می‎دهد. این کتاب نخستین کتابی است که زبان فارسی را بر اساس «دستور آموزشی» تدریس می‌کند و برای آموزش دستور بر نقش و کاربرد آن در «ارتباط» تمرکز دارد که این نکته مهمترین ویژگی این کتاب به شمار می‎رود.
                جلد اول چارچوب متشکل از 35 درس است که در 12 فصل دسته‌بندی شده‌اند. هر درس بر یک کارکرد زبانی تمرکز دارد که در قالب یکی از ساخت‎های دستوری آموزش داده می‌شود. قالب درس‎ها و چینش تمرین‎ها از نوع تشخیصی به تولیدی است؛ به گونه‎ای که زبان‌آموز کارکرد زبانی موردنظر را ابتدا در ساختار دستوری مناسب آن تمرین می‎کند و سپس، با انجام دو تمرین پایانی موفق می‎شود تا آن ساخت را در موقعیت درست، به صورت نوشتاری و گفتاری به کار ببرد. هر نکتۀ دستوری به گونه‎ای در میان تمرین‎ها جای داده شده است که تمرین بعد از آن، به تثبیت آن نکته در ذهن زبان‎آموز کمک می‏کند. همچنین، در پایان هر فصل، توصیف قواعد دستوری و آموزش مستقیم آن به صورت سنتی، با ارائه بخشی به نام «توضیح دستوری» مد نظر بوده است.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5111813',
                'index_file' => 'indexes/persianframe1.pdf',
                'sample_file' => 'samples/persianframe1.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'MarziyeSadat-EatemadalEslami'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Akram-Seyedrezaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'grammar',
                ],
            ],
            //persianframe2
            [
                'title' => 'چارچوب 2',
                'title_abbr' => 'persianframe2',
                'cover' => 'covers/persianframe2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianframe')->id,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'MarziyeSadat-EatemadalEslami'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'grammar',
                ],
            ],
            //persianframe3
            [
                'title' => 'چارچوب 3',
                'title_abbr' => 'persianframe3',
                'cover' => 'covers/persianframe3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianframe')->id,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => null,
                'tags' => [
                    'language-learning',
                    'grammar',
                ],
            ],
            //persianinuse1
            [
                'title' => 'آموزش کاربردی واژه 1',
                'title_abbr' => 'persianinuse1',
                'cover' => 'covers/persianinuse1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianinuse')->id,
                'intro' => <<<INTRO
                جلد اول از مجموعۀ آموزش کاربردی واژه، ویژۀ‌ فارسی‌آموزان سطح مقدماتی و پیش‌میانی است که با تصویرگری مبتنی بر واقعیت، واژه‌‎های عینی و پربسامد را آموزش می‌دهد؛ به طور علمی و با ظرافت، تفاوت‌های گفتاری و نوشتاری زبان فارسی را معرفی می‌کند و زبان‌آموزان را برای کاربرد آن در جامعه فارسی زبان آماده می‌سازد. از آنجایی که در این کتاب به آموزش تمام مهارت‌های زبانی پرداخته شده است، می‌توان از آن در یک دورۀ آموزشی به عنوان کتاب اصلی برای آموزش زبان فارسی بهره برد.
                این کتاب مشتمل بر 6 حوزۀ واژگانی با عنوان‌های اطلاعات مقدماتی، انسان، خانه، زندگیِ روزمره، خوردنی‌ها و طبیعت است که در مجموع 30 درس را تشکیل می‏‌دهند؛ به این ترتیب که هر حوزه، شامل 5 درسِ چهار صفحه‏‌ای و یک تمرینِ مرور در انتهای آن است. ترتیب ارائۀ تمرین‌ها از نوع تشخیصی به تولیدی است که در نهایت زبان‌آموز موفق می‌شود در تمرین «دربارۀ شما» با واژه‌های جدیدی که آموخته است دربارۀ زندگی واقعی خود صحبت کند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/4637912',
                'index_file' => 'indexes/persianinuse1.pdf',
                'sample_file' => 'samples/persianinuse1.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Leila-Banafshe'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'vocabulary',
                ],
            ],
            //persianinuse2
            [
                'title' => 'آموزش کاربردی واژه 2',
                'title_abbr' => 'persianinuse2',
                'cover' => 'covers/persianinuse2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianinuse')->id,
                'intro' => <<<INTRO
                جلد دوم از مجموعۀ آموزش کاربردی واژه، همانند جلد اول ویژۀ فارسی‌آموزان سطح مقدماتی و پیش‌میانی است و به لحاظ طراحی، تصویرگری و گزینش واژه‌ها، شباهت زیادی به جلد اول دارد و به لحاظ محتوا نیز ادامۀ جلد اول محسوب می‎شود. این کتاب نیز، به‌طور علمی و با ظرافت، تفاوت‌های گفتاری و نوشتاری زبان فارسی را معرفی می‎کند و زبان‌آموزان را برای کاربرد آن در جامعۀ فارسی زبان آماده می‌سازد؛ همچنین، هر چهار مهارت‌ زبانی مدنظر بوده است، به طوری که می‌توان از آن در یک دورۀ آموزشی به عنوان کتاب اصلی بهره برد.
                محتوای جلد دوم مشتمل بر 6 حوزۀ واژگانی با عنوان‌های دنیای اطراف ما، کار- تحصیل- سفر، سرگرمی‎ها، کاربرد اجتماعی زبان، زبان (1) و زبان (2) است که مجموعاً 30 درس را تشکیل می‏‌دهند؛ به این ترتیب که هر حوزه، شامل 5 درسِ چهار صفحه‏‌ای و یک تمرینِ مرور در انتهای آن است. ترتیب ارائۀ تمرین‌ها از نوع تشخیصی به تولیدی است که در نهایت زبان‌آموز موفق می‌شود در تمرین «دربارۀ شما» با واژه‌های جدیدی که آموخته است دربارۀ زندگی واقعی خود صحبت کند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5915035',
                'index_file' => 'indexes/persianinuse2.pdf',
                'sample_file' => 'samples/persianinuse2.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Leila-Banafshe'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'vocabulary',
                ],
            ],
            //persianinuse3
            [
                'title' => 'آموزش کاربردی واژه 3',
                'title_abbr' => 'persianinuse3',
                'cover' => 'covers/persianinuse3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'persianinuse')->id,
                'intro' => <<<INTRO
                جلد سوم از مجموعۀ «آموزش کاربردی واژه» برای فارسی‌آموزان سطح میانی و فوق‌میانی تألیف شده است و ساختار آن با دو جلد پیشینِ این مجموعه متفاوت است. مهمترین ویژگی‎ این کتاب، آموزش هدفمند واژه‌‏های عمومی و نیمه‌تخصصی زبان فارسی در قالب متن‌های جذاب و معنی‎دار است. راهبرد اصلی این کتاب، آموزش واژه بر اساس فرایند تکرارِ هدفمند است. در آموزش واژه‌های موردنظر، مؤلفان تلاش کرده‌اند با اتخاذ یک رویکرد اصولی، نقش یادگیرنده را در یادگیری زبان فارسی به‎طور عام و واژه‌های آن به طور خاص، مورد تأکید قرار دهند. پ
                دیگر ویژگی‎های‌ متمایزکنندۀ این کتاب، طراحی خودخوان آن است که امکان یادگیری بیش از 1300 واژۀ ضروری و پربسامد زبان فارسی را با رویکرد یادگیری صریح و ضمنی، فراهم می‎سازد. همچنین، پیوستگی تمام درس‌ها از طریق اجرای اصلِ «مرور پیوسته» و تکرار معنادار واژه‎های جدید در جمله‎ها و متن‎های بعدی، موجب می‎شود یادگیری و تثبیت واژه‎های جدید آسان‌تر گردد.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/5111813',
                'index_file' => 'indexes/persianinuse3.pdf',
                'sample_file' => 'samples/persianinuse3.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'AliAsghar-Rahimi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Shahnaz-Ahmadighader'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Akram-Seyedrezaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'vocabulary',
                ],
            ],
            //shiraz1
            [
                'title' => 'شیراز 1',
                'title_abbr' => 'shiraz1',
                'cover' => 'covers/shiraz1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'shiraz')->id,
                'intro' => <<<INTRO
                مجموعۀ آموزش زبان فارسی «شیراز» یک مجموعۀ 4 جلدی چهارمهارتی است که با هدف آموزش زبان فارسی در مدارس متوسطه و به طور مشخص مدارس عرب‌زبان تدوین شده است. هر چند سایر فارسی‌آموزان نیز می‌توانند برای یادگیری زبان فارسی از آن استفاده کنند. جلد نخست این مجموعه مناسب فارسی‌آموزان سطح مقدماتی و سه جلد دیگر به ترتیب برای فارسی‌آموزان سطوح پیش‌میانی، میانی و فوق‌میانی در نظر گرفته شده است. هر جلد این مجموعه شامل 18 درس است که در قالب 6 بخش ارائه می‌گردد. ساختار هر بخش به شرح زیر است:
                <ol><li>آماده‌سازی</li><li>درس اول واژه: دستور، گفتگو، تلفظ</li><li>درس دوم: واژه، دستور، گفتگو، تلفظ</li><li>درس سوم: شنیدن، صحبت‌کردن، خواندن، نوشتن</li><li>مرور</li></ol>
                از مهم‌ترین ویژگی‌های مجموعه‌ی شیراز می‌توان به موارد زیر اشاره کرد:
                <ol><li>با توجه به اینکه جامعه‌ی هدف این مجموعه، فارسی‌آموزان عرب‌زبان هستند و میان نویسه‌های فارسی و عربی تشابه فراوانی وجود دارد، رویکرد این مجموعه به آموزش حروف و صداها، تمرکز بر برجسته‌سازی موارد تشابه و اختلاف در زبان فارسی و عربی بوده است. به این منظور، پیش از آغاز دروس کتاب اول، در بخش «حرف‌ها و صداها»، نمایی از تمامی نویسه‌ها و تلفظ آنها داده شده است. از ویژگی‌های این بخش آن است که واژه‌های نمونه به همراه تصویر ارائه شده‌اند تا این بخش برای فارسی‌آموزان معنادارتر و عینی‌تر شود. آموزش حروف و صداها در این کتاب، به این نمای کلی محدود نمی‌شود و در درس‌های اول و دوم هر بخش در قسمتی تحت عنوان «تلفظ»، تمایزهایی که میان تلفظ حروف در فارسی و عربی وجود دارد همراه با مثال‌های مختلف آموزش داده خواهد شد. در انتهای صفحه‌ی «تلفظ»، یک داستانک تصویری با مکالمه‌هایی کوتاه و ساده در نظر گرفته شده تا تلفظ حروف مورد نظر در قالبی جذاب ارائه و تمرین شود.</li><li>در این مجموعه، گونۀ گفتاری زبان فارسی همزمان با گونۀ نوشتاری آموزش داده می‌شود و به طور مشخص در صفحات «گفتگو»، «شنیدن» و «صحبت‌کردن» گونه‌ی گفتاری مورد استفاده و توجه قرار گرفته است.</li><li>آموزش دستور در این مجموعه، همراه با تصویر و به صورت غیرمستقیم است. محتوای استفاده‌شده در بخش «دستور» همراستا با محتوای واژگانی و کارکردی آن بخش است و در اغلب موارد با ماجراهای داستانی بخش «گفتگو» در هر درس ارتباط دارد.</li><li>کارکردهای زبانی در بخش «گفتگو» ارائه شده‌اند. در درس‌های اول و دوم هر بخش صفحه‌ای تحت عنوان «گفتگو» وجود دارد و شامل یک موقعیت داستانی منسجم در قالب سه یا چهار گفتگوی کوتاه است. این گفتگوها علاوه بر پوشش کارکرد/ کارکردهای مورد نظر درس، محتوای واژگانی و دستوری درس را نیز در برمی‌گیرند.</li><li>فعالیت‌های تمرینی این مجموعه بر مبنای رویکرد ارتباطی و تکلیف‌محور تدوین و اغلب آنها به صورت فعالیت‌هایی تعاملی و با عنوان‌های تمرین‌های «دونفره» یا «گروهی» ارائه شده‌اند.</li><li>از ویژگی‌های منحصربه‌فرد این مجموعه، درنظرگرفتن شخصیت‌های داستانی ثابت در کل مجموعه و تصویرسازی آنها به منظور جذابیت و همراهی دانش‌آموزان بوده است.</li><li>هر بخش این مجموعه، با یک صفحۀ «آماده‌سازی» آغاز و با صفحه‌ای با عنوان «مرور و تمرین» به پایان می‌رسد. صفحه‌ی «آماده‌سازی» شامل یک فعالیت ساده‌ی تصویری است که فارسی‌آموزان را برای ورود به آن بخش آماده می‌کند. در پایان هر بخش نیز به منظور یادآوری و مرور مطالب آموخته‌شده، تمرین‌هایی ارائه گردیده است. آخرین فعالیتی که در این قسمت گنجانده شده، گوش‌دادن به یک موسیقی است که شعر آن با توجه به محتوای آن بخش نوشته شده و فارسی‌آموزان می‌توانند با گوش‌دادن به آن و هم‌خوانی‌اش در کلاس، آموخته‌هایشان در آن بخش را تثبیت کنند.</li><li>در انتهای کتاب یک واژه‌نامه‌ی فارسی- انگلیسی- عربی ارائه شده است. در این قسمت، فارسی‌آموزان می‌توانند معادل عربی و انگلیسی واژه‌های به کار رفته در کتاب را پیدا کرده و تلفظ درست آنها را ملاحظه نمایند.</li></ol>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/6550512',
                'index_file' => 'indexes/shiraz1.pdf',
                'sample_file' => 'samples/shiraz1.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'a'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hamid-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nastaran-Rostamzade'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nashmin-Valadi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //shiraz2
            [
                'title' => 'شیراز 2',
                'title_abbr' => 'shiraz2',
                'cover' => 'covers/shiraz2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'shiraz')->id,
                'intro' => <<<INTRO
                مجموعۀ آموزش زبان فارسی «شیراز» یک مجموعۀ 4 جلدی چهارمهارتی است که با هدف آموزش زبان فارسی در مدارس متوسطه و به طور مشخص مدارس عرب‌زبان تدوین شده است. هر چند سایر فارسی‌آموزان نیز می‌توانند برای یادگیری زبان فارسی از آن استفاده کنند. جلد نخست این مجموعه مناسب فارسی‌آموزان سطح مقدماتی و سه جلد دیگر به ترتیب برای فارسی‌آموزان سطوح پیش‌میانی، میانی و فوق‌میانی در نظر گرفته شده است. هر جلد این مجموعه شامل 18 درس است که در قالب 6 بخش ارائه می‌گردد. ساختار هر بخش به شرح زیر است:
                <ol><li>آماده‌سازی</li><li>درس اول واژه: دستور، گفتگو، تلفظ</li><li>درس دوم: واژه، دستور، گفتگو، تلفظ</li><li>درس سوم: شنیدن، صحبت‌کردن، خواندن، نوشتن</li><li>مرور</li></ol>
                از مهم‌ترین ویژگی‌های مجموعه‌ی شیراز می‌توان به موارد زیر اشاره کرد:
                <ol><li>با توجه به اینکه جامعه‌ی هدف این مجموعه، فارسی‌آموزان عرب‌زبان هستند و میان نویسه‌های فارسی و عربی تشابه فراوانی وجود دارد، رویکرد این مجموعه به آموزش حروف و صداها، تمرکز بر برجسته‌سازی موارد تشابه و اختلاف در زبان فارسی و عربی بوده است. به این منظور، پیش از آغاز دروس کتاب اول، در بخش «حرف‌ها و صداها»، نمایی از تمامی نویسه‌ها و تلفظ آنها داده شده است. از ویژگی‌های این بخش آن است که واژه‌های نمونه به همراه تصویر ارائه شده‌اند تا این بخش برای فارسی‌آموزان معنادارتر و عینی‌تر شود. آموزش حروف و صداها در این کتاب، به این نمای کلی محدود نمی‌شود و در درس‌های اول و دوم هر بخش در قسمتی تحت عنوان «تلفظ»، تمایزهایی که میان تلفظ حروف در فارسی و عربی وجود دارد همراه با مثال‌های مختلف آموزش داده خواهد شد. در انتهای صفحه‌ی «تلفظ»، یک داستانک تصویری با مکالمه‌هایی کوتاه و ساده در نظر گرفته شده تا تلفظ حروف مورد نظر در قالبی جذاب ارائه و تمرین شود.</li><li>در این مجموعه، گونۀ گفتاری زبان فارسی همزمان با گونۀ نوشتاری آموزش داده می‌شود و به طور مشخص در صفحات «گفتگو»، «شنیدن» و «صحبت‌کردن» گونه‌ی گفتاری مورد استفاده و توجه قرار گرفته است.</li><li>آموزش دستور در این مجموعه، همراه با تصویر و به صورت غیرمستقیم است. محتوای استفاده‌شده در بخش «دستور» همراستا با محتوای واژگانی و کارکردی آن بخش است و در اغلب موارد با ماجراهای داستانی بخش «گفتگو» در هر درس ارتباط دارد.</li><li>کارکردهای زبانی در بخش «گفتگو» ارائه شده‌اند. در درس‌های اول و دوم هر بخش صفحه‌ای تحت عنوان «گفتگو» وجود دارد و شامل یک موقعیت داستانی منسجم در قالب سه یا چهار گفتگوی کوتاه است. این گفتگوها علاوه بر پوشش کارکرد/ کارکردهای مورد نظر درس، محتوای واژگانی و دستوری درس را نیز در برمی‌گیرند.</li><li>فعالیت‌های تمرینی این مجموعه بر مبنای رویکرد ارتباطی و تکلیف‌محور تدوین و اغلب آنها به صورت فعالیت‌هایی تعاملی و با عنوان‌های تمرین‌های «دونفره» یا «گروهی» ارائه شده‌اند.</li><li>از ویژگی‌های منحصربه‌فرد این مجموعه، درنظرگرفتن شخصیت‌های داستانی ثابت در کل مجموعه و تصویرسازی آنها به منظور جذابیت و همراهی دانش‌آموزان بوده است.</li><li>هر بخش این مجموعه، با یک صفحۀ «آماده‌سازی» آغاز و با صفحه‌ای با عنوان «مرور و تمرین» به پایان می‌رسد. صفحه‌ی «آماده‌سازی» شامل یک فعالیت ساده‌ی تصویری است که فارسی‌آموزان را برای ورود به آن بخش آماده می‌کند. در پایان هر بخش نیز به منظور یادآوری و مرور مطالب آموخته‌شده، تمرین‌هایی ارائه گردیده است. آخرین فعالیتی که در این قسمت گنجانده شده، گوش‌دادن به یک موسیقی است که شعر آن با توجه به محتوای آن بخش نوشته شده و فارسی‌آموزان می‌توانند با گوش‌دادن به آن و هم‌خوانی‌اش در کلاس، آموخته‌هایشان در آن بخش را تثبیت کنند.</li><li>در انتهای کتاب یک واژه‌نامه‌ی فارسی- انگلیسی- عربی ارائه شده است. در این قسمت، فارسی‌آموزان می‌توانند معادل عربی و انگلیسی واژه‌های به کار رفته در کتاب را پیدا کرده و تلفظ درست آنها را ملاحظه نمایند.</li></ol>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hamid-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nashmin-Valadi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //shiraz3
            [
                'title' => 'شیراز 3',
                'title_abbr' => 'shiraz3',
                'cover' => 'covers/shiraz3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'shiraz')->id,
                'intro' => <<<INTRO
                مجموعۀ آموزش زبان فارسی «شیراز» یک مجموعۀ 4 جلدی چهارمهارتی است که با هدف آموزش زبان فارسی در مدارس متوسطه و به طور مشخص مدارس عرب‌زبان تدوین شده است. هر چند سایر فارسی‌آموزان نیز می‌توانند برای یادگیری زبان فارسی از آن استفاده کنند. جلد نخست این مجموعه مناسب فارسی‌آموزان سطح مقدماتی و سه جلد دیگر به ترتیب برای فارسی‌آموزان سطوح پیش‌میانی، میانی و فوق‌میانی در نظر گرفته شده است. هر جلد این مجموعه شامل 18 درس است که در قالب 6 بخش ارائه می‌گردد. ساختار هر بخش به شرح زیر است:
                <ol><li>آماده‌سازی</li><li>درس اول واژه: دستور، گفتگو، تلفظ</li><li>درس دوم: واژه، دستور، گفتگو، تلفظ</li><li>درس سوم: شنیدن، صحبت‌کردن، خواندن، نوشتن</li><li>مرور</li></ol>
                از مهم‌ترین ویژگی‌های مجموعه‌ی شیراز می‌توان به موارد زیر اشاره کرد:
                <ol><li>با توجه به اینکه جامعه‌ی هدف این مجموعه، فارسی‌آموزان عرب‌زبان هستند و میان نویسه‌های فارسی و عربی تشابه فراوانی وجود دارد، رویکرد این مجموعه به آموزش حروف و صداها، تمرکز بر برجسته‌سازی موارد تشابه و اختلاف در زبان فارسی و عربی بوده است. به این منظور، پیش از آغاز دروس کتاب اول، در بخش «حرف‌ها و صداها»، نمایی از تمامی نویسه‌ها و تلفظ آنها داده شده است. از ویژگی‌های این بخش آن است که واژه‌های نمونه به همراه تصویر ارائه شده‌اند تا این بخش برای فارسی‌آموزان معنادارتر و عینی‌تر شود. آموزش حروف و صداها در این کتاب، به این نمای کلی محدود نمی‌شود و در درس‌های اول و دوم هر بخش در قسمتی تحت عنوان «تلفظ»، تمایزهایی که میان تلفظ حروف در فارسی و عربی وجود دارد همراه با مثال‌های مختلف آموزش داده خواهد شد. در انتهای صفحه‌ی «تلفظ»، یک داستانک تصویری با مکالمه‌هایی کوتاه و ساده در نظر گرفته شده تا تلفظ حروف مورد نظر در قالبی جذاب ارائه و تمرین شود.</li><li>در این مجموعه، گونۀ گفتاری زبان فارسی همزمان با گونۀ نوشتاری آموزش داده می‌شود و به طور مشخص در صفحات «گفتگو»، «شنیدن» و «صحبت‌کردن» گونه‌ی گفتاری مورد استفاده و توجه قرار گرفته است.</li><li>آموزش دستور در این مجموعه، همراه با تصویر و به صورت غیرمستقیم است. محتوای استفاده‌شده در بخش «دستور» همراستا با محتوای واژگانی و کارکردی آن بخش است و در اغلب موارد با ماجراهای داستانی بخش «گفتگو» در هر درس ارتباط دارد.</li><li>کارکردهای زبانی در بخش «گفتگو» ارائه شده‌اند. در درس‌های اول و دوم هر بخش صفحه‌ای تحت عنوان «گفتگو» وجود دارد و شامل یک موقعیت داستانی منسجم در قالب سه یا چهار گفتگوی کوتاه است. این گفتگوها علاوه بر پوشش کارکرد/ کارکردهای مورد نظر درس، محتوای واژگانی و دستوری درس را نیز در برمی‌گیرند.</li><li>فعالیت‌های تمرینی این مجموعه بر مبنای رویکرد ارتباطی و تکلیف‌محور تدوین و اغلب آنها به صورت فعالیت‌هایی تعاملی و با عنوان‌های تمرین‌های «دونفره» یا «گروهی» ارائه شده‌اند.</li><li>از ویژگی‌های منحصربه‌فرد این مجموعه، درنظرگرفتن شخصیت‌های داستانی ثابت در کل مجموعه و تصویرسازی آنها به منظور جذابیت و همراهی دانش‌آموزان بوده است.</li><li>هر بخش این مجموعه، با یک صفحۀ «آماده‌سازی» آغاز و با صفحه‌ای با عنوان «مرور و تمرین» به پایان می‌رسد. صفحه‌ی «آماده‌سازی» شامل یک فعالیت ساده‌ی تصویری است که فارسی‌آموزان را برای ورود به آن بخش آماده می‌کند. در پایان هر بخش نیز به منظور یادآوری و مرور مطالب آموخته‌شده، تمرین‌هایی ارائه گردیده است. آخرین فعالیتی که در این قسمت گنجانده شده، گوش‌دادن به یک موسیقی است که شعر آن با توجه به محتوای آن بخش نوشته شده و فارسی‌آموزان می‌توانند با گوش‌دادن به آن و هم‌خوانی‌اش در کلاس، آموخته‌هایشان در آن بخش را تثبیت کنند.</li><li>در انتهای کتاب یک واژه‌نامه‌ی فارسی- انگلیسی- عربی ارائه شده است. در این قسمت، فارسی‌آموزان می‌توانند معادل عربی و انگلیسی واژه‌های به کار رفته در کتاب را پیدا کرده و تلفظ درست آنها را ملاحظه نمایند.</li></ol>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hamid-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nashmin-Valadi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //shiraz4
            [
                'title' => 'شیراز 4',
                'title_abbr' => 'shiraz4',
                'cover' => 'covers/shiraz4.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'shiraz')->id,
                'intro' => <<<INTRO
                مجموعۀ آموزش زبان فارسی «شیراز» یک مجموعۀ 4 جلدی چهارمهارتی است که با هدف آموزش زبان فارسی در مدارس متوسطه و به طور مشخص مدارس عرب‌زبان تدوین شده است. هر چند سایر فارسی‌آموزان نیز می‌توانند برای یادگیری زبان فارسی از آن استفاده کنند. جلد نخست این مجموعه مناسب فارسی‌آموزان سطح مقدماتی و سه جلد دیگر به ترتیب برای فارسی‌آموزان سطوح پیش‌میانی، میانی و فوق‌میانی در نظر گرفته شده است. هر جلد این مجموعه شامل 18 درس است که در قالب 6 بخش ارائه می‌گردد. ساختار هر بخش به شرح زیر است:
                <ol><li>آماده‌سازی</li><li>درس اول واژه: دستور، گفتگو، تلفظ</li><li>درس دوم: واژه، دستور، گفتگو، تلفظ</li><li>درس سوم: شنیدن، صحبت‌کردن، خواندن، نوشتن</li><li>مرور</li></ol>
                از مهم‌ترین ویژگی‌های مجموعه‌ی شیراز می‌توان به موارد زیر اشاره کرد:
                <ol><li>با توجه به اینکه جامعه‌ی هدف این مجموعه، فارسی‌آموزان عرب‌زبان هستند و میان نویسه‌های فارسی و عربی تشابه فراوانی وجود دارد، رویکرد این مجموعه به آموزش حروف و صداها، تمرکز بر برجسته‌سازی موارد تشابه و اختلاف در زبان فارسی و عربی بوده است. به این منظور، پیش از آغاز دروس کتاب اول، در بخش «حرف‌ها و صداها»، نمایی از تمامی نویسه‌ها و تلفظ آنها داده شده است. از ویژگی‌های این بخش آن است که واژه‌های نمونه به همراه تصویر ارائه شده‌اند تا این بخش برای فارسی‌آموزان معنادارتر و عینی‌تر شود. آموزش حروف و صداها در این کتاب، به این نمای کلی محدود نمی‌شود و در درس‌های اول و دوم هر بخش در قسمتی تحت عنوان «تلفظ»، تمایزهایی که میان تلفظ حروف در فارسی و عربی وجود دارد همراه با مثال‌های مختلف آموزش داده خواهد شد. در انتهای صفحه‌ی «تلفظ»، یک داستانک تصویری با مکالمه‌هایی کوتاه و ساده در نظر گرفته شده تا تلفظ حروف مورد نظر در قالبی جذاب ارائه و تمرین شود.</li><li>در این مجموعه، گونۀ گفتاری زبان فارسی همزمان با گونۀ نوشتاری آموزش داده می‌شود و به طور مشخص در صفحات «گفتگو»، «شنیدن» و «صحبت‌کردن» گونه‌ی گفتاری مورد استفاده و توجه قرار گرفته است.</li><li>آموزش دستور در این مجموعه، همراه با تصویر و به صورت غیرمستقیم است. محتوای استفاده‌شده در بخش «دستور» همراستا با محتوای واژگانی و کارکردی آن بخش است و در اغلب موارد با ماجراهای داستانی بخش «گفتگو» در هر درس ارتباط دارد.</li><li>کارکردهای زبانی در بخش «گفتگو» ارائه شده‌اند. در درس‌های اول و دوم هر بخش صفحه‌ای تحت عنوان «گفتگو» وجود دارد و شامل یک موقعیت داستانی منسجم در قالب سه یا چهار گفتگوی کوتاه است. این گفتگوها علاوه بر پوشش کارکرد/ کارکردهای مورد نظر درس، محتوای واژگانی و دستوری درس را نیز در برمی‌گیرند.</li><li>فعالیت‌های تمرینی این مجموعه بر مبنای رویکرد ارتباطی و تکلیف‌محور تدوین و اغلب آنها به صورت فعالیت‌هایی تعاملی و با عنوان‌های تمرین‌های «دونفره» یا «گروهی» ارائه شده‌اند.</li><li>از ویژگی‌های منحصربه‌فرد این مجموعه، درنظرگرفتن شخصیت‌های داستانی ثابت در کل مجموعه و تصویرسازی آنها به منظور جذابیت و همراهی دانش‌آموزان بوده است.</li><li>هر بخش این مجموعه، با یک صفحۀ «آماده‌سازی» آغاز و با صفحه‌ای با عنوان «مرور و تمرین» به پایان می‌رسد. صفحه‌ی «آماده‌سازی» شامل یک فعالیت ساده‌ی تصویری است که فارسی‌آموزان را برای ورود به آن بخش آماده می‌کند. در پایان هر بخش نیز به منظور یادآوری و مرور مطالب آموخته‌شده، تمرین‌هایی ارائه گردیده است. آخرین فعالیتی که در این قسمت گنجانده شده، گوش‌دادن به یک موسیقی است که شعر آن با توجه به محتوای آن بخش نوشته شده و فارسی‌آموزان می‌توانند با گوش‌دادن به آن و هم‌خوانی‌اش در کلاس، آموخته‌هایشان در آن بخش را تثبیت کنند.</li><li>در انتهای کتاب یک واژه‌نامه‌ی فارسی- انگلیسی- عربی ارائه شده است. در این قسمت، فارسی‌آموزان می‌توانند معادل عربی و انگلیسی واژه‌های به کار رفته در کتاب را پیدا کرده و تلفظ درست آنها را ملاحظه نمایند.</li></ol>
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b3'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hamid-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'SeyedeFateme-Tabasi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Maryam-Soltani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Mohammad-Aghaei'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nashmin-Valadi'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                ],
            ],
            //persianstandard
            [
                'title' => 'استاندارد مرجع آموزش زبان فارسی در جهان',
                'title_abbr' => 'persianstandard',
                'cover' => 'covers/persianstandard.jpg',
                'collection_id' => null,
                'intro' => <<<INTRO
                آموزش زبان فارسی به خارجیان حدود 400 سال سابقه مکتوب و مستند دارد؛ با وجود این، هنوز فاقد یک  استاندارد آموزشی مرجع فراگیر است. این درحالی است که برای اکثر زبان‌های دنیا، از جمله انگلیسی، فرانسه،  آلمانی، اسپانیایی و حتی چینی، کره‌ای، ترکی و عربی چارچوب‌های آموزشی مرجع وجود دارد و تمام برنامه‌های  آموزشی موسسه‌های مربوط به آموزش این زبانها در قالب این استانداردها اجرا میشود. هدف از تدوین این  استاندارد آموزشی، ساماندهی برنامههای آموزشی زبان فارسی به خارجیان، آزمونهای تعیین سطح، پیشرفت و  بسندگی/مهارتی، و یکسانسازی و ارتقاء محتوای دورههای آموزشی کوتاه‌مدت و بلندمدت زبان فارسی است.  به‌علاوه، این استاندارد، معیار معتبری برای تهیه و تدوین مواد آموزشی و کمک آموزشی است. در این استاندارد  آموزشی، متناسب با تنوع فارسی‌آموزان خارجی و اهداف گوناگون آنها، آموزش زبان فارسی در 720 ساعت آموزشی  و 4 سطح طراحی شده است. سطوح آموزش زبان فارسی در این چارچوب عبارتند از: سطح نوآموز 40 ساعت  آموزشی، سطح مقدماتی 120 ساعت آموزشی، سطح میانی 360 ساعت آموزشی و سطح پیشرفته و ماهر 200 ساعت آموزشی.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => 'http://opac.nlai.ir/opac-prod/bibliographic/4543060',
                'index_file' => 'indexes/persianstandard.pdf',
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Faeze-Marsous'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Nazila-FarmaniAnoushe'),
                        'role_title' => Role::firstWhere('title_abbr', 'editor'),
                    ],
                ],
                'tags' => [
                    'teaching',
                ],
            ],
            //trip2iran1
            [
                'title' => 'سفر به ایران 1',
                'title_abbr' => 'trip2iran1',
                'cover' => 'covers/trip2iran1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'trip2iran')->id,
                'intro' => <<<INTRO
                دورۀ دوجلدی «سفر به ایران» از جمله کتاب‌های آموزش زبان فارسی با اهداف ویژه است و با هدف آموزش زبان فارسی به گردشگرانی که قصد بازدید از جاذبه‌های تاریخی، طبیعی، فرهنگی و هنری کشور ایران را دارند، تهیه شده است. در این کتاب، فرد با موقعیت‌های مختلفی که یک گردشگر به‌طور معمول در آن قرار گرفته و با آن مواجه می‌شود و گفتمان غالب و بی‌نشان در هر موقعیت آشنا شده و با مطالعۀ دروس و انجام تمرین‌های کتاب می‌تواند ارتباط نوشتاری و گفتاری مؤثری با فارسی‌زبانان برقرار کند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Fateme-Afshar'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                    'FSP',
                ],
            ],
            //trip2iran2
            [
                'title' => 'سفر به ایران 2',
                'title_abbr' => 'trip2iran2',
                'cover' => 'covers/trip2iran2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'trip2iran')->id,
                'intro' => <<<INTRO
                دورۀ دوجلدی «سفر به ایران» از جمله کتاب‌های آموزش زبان فارسی با اهداف ویژه است و با هدف آموزش زبان فارسی به گردشگرانی که قصد بازدید از جاذبه‌های تاریخی، طبیعی، فرهنگی و هنری کشور ایران را دارند، تهیه شده است. در این کتاب، فرد با موقعیت‌های مختلفی که یک گردشگر به‌طور معمول در آن قرار گرفته و با آن مواجه می‌شود و گفتمان غالب و بی‌نشان در هر موقعیت آشنا شده و با مطالعۀ دروس و انجام تمرین‌های کتاب می‌تواند ارتباط نوشتاری و گفتاری مؤثری با فارسی‌زبانان برقرار کند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Morvarid-Talebi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Fateme-Afshar'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    '4skills',
                    'FSP',
                ],
            ],
            //easyteaching
            [
                'title' => 'روش‌های سادۀ آموزش زبان فارسی',
                'title_abbr' => 'easyteaching',
                'cover' => 'covers/easyteaching.jpg',
                'collection_id' => null,
                'intro' => <<<INTRO
                آموزش زبان فارسی به غیرفارسی‌زبانان، یکی از حوزه‌های نوین آموزشی در دنیای امروز است. مدرسان گوناگونی از سراسر دنیا داوطلب آموزش این زبان در سطح بین‌المللی هستند تا بستر مناسبی برای یادگیری آن فراهم نمایند. 
                در این قدم، مدرس باید با استفاده از شیوه‌ها و روش‌های نوین آموزشی، یادگیری زبان فارسی را برای مشتاقان آن تسهیل نملید، تا علاوه بر یادگیری زبان، از به کارگیری آن لذت ببرند. اگر مدرس بتواند با فراهم نمودن شیوه‌های هرچه قوی‌تر و به‌روزتر آموزشی فضای مناسبی برای یادگیری ایجاد کتد، کمک بزرگی به گسترش زبان فارسی در جهان انجام داده است. 
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/easyteaching.pdf',
                'sample_file' => 'samples/easyteaching.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hoda-Salimi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'teaching',
                ],
            ],
            //khomreh
            [
                'title' => 'خمره',
                'title_abbr' => 'khomreh',
                'cover' => 'covers/khomreh.jpg',
                'collection_id' => null,
                'intro' => <<<INTRO
                کتاب حاضر اثر ارزشمند هوشنگ مرادی کرمانی در حوزه ادبیات داستانی است. این رمان توسط خانم کارولین کروسکری به زبان انگلیسی ترجمه شده است. از خصوصیات این اثر ترجمه روان و دقیق، ساده سازی اصطلاحات و ضرب المثل‌های کلیدی است. این کتاب ویژه فارسی آموزان به منظور تقویت مهارت خواندن و آشنایی با ادبیات داستانی زبان فارسی است.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => 'samples/khomreh.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Houshang-MoradiKermani'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Caroline-Croskery'),
                        'role_title' => Role::firstWhere('title_abbr', 'translator'),
                    ],
                ],
                'tags' => [
                    'educational-assistance',
                    '2languages',
                ],
            ],
            //hidr
            [
                'title' => 'سلام دکتر',
                'title_abbr' => 'hidr',
                'cover' => 'covers/hidr.jpg',
                'collection_id' => null,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => 'indexes/hidr.pdf',
                'sample_file' => 'samples/hidr.pdf',
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => null,
            ],
            //pracsen1
            [
                'title' => 'جملات کاربردی زبان فارسی',
                'title_abbr' => 'pracsen1',
                'cover' => 'covers/pracsen1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'pracsen')->id,
                'intro' => <<<INTRO
                کتاب جملات کاربردی بر اساس برنامه درسی موقعیتی نوشته شده است که در آن 700 جمله کاربردی زبان فارسی در 18 موقعیت آورده شده‌است؛ جملاتی معمولاً فارسی‌زبان‌ها در هر موقعیت بیشتر از آنها‌ استفاده می‌کنند. این برای سفر، یادگیری فارسی با اهداف ویژه و یادگیری موقعیتی زبان فارسی  مفید خواهد بود.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'educational-assistance',
                ],
            ],
            //pracsen2
            [
                'title' => 'جملات کاربردی زبان فارسی 2',
                'title_abbr' => 'pracsen2',
                'cover' => 'covers/pracsen2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'pracsen')->id,
                'intro' => <<<INTRO
                کتاب جملات کاربردی بر اساس برنامه درسی موقعیتی نوشته شده است که در آن 700 جمله کاربردی زبان فارسی در 18 موقعیت آورده شده‌است؛ جملاتی معمولاً فارسی‌زبان‌ها در هر موقعیت بیشتر از آنها‌ استفاده می‌کنند. این برای سفر، یادگیری فارسی با اهداف ویژه و یادگیری موقعیتی زبان فارسی  مفید خواهد بود.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'educational-assistance',
                ],
            ],
            //amfareading1
            [
                'title' => 'خواندن آمفا 1',
                'title_abbr' => 'amfareading1',
                'cover' => 'covers/amfareading1.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'amfareading')->id,
                'intro' => <<<INTRO
                هر مهارت زبانی، زیرمهارت‌هایی دارد که نوع‌ خواندن و ادراک ما از متن را تحث تأثیر قرار می‌دهد. در این 4 مجلد،12 زیرمهارت خواندن در قالب دوازده فصل (هر جلد سه فصل) ارائه می‌شود که هر فصل شامل 9 متن است که فقط و فقط به یک زیرمهارت خواندن می‌پردازد. این کتب در راستای آماده‌سازی فارسی‌آموزان / غیرفارسی‌زبانان برای آزمون‌های بین‌المللی زبان فارسی، مخصوصاً آمفا تهیه و تدوین شده‌اند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                    'amfa',
                ],
            ],
            //amfareading2
            [
                'title' => 'خواندن آمفا 2',
                'title_abbr' => 'amfareading2',
                'cover' => 'covers/amfareading2.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'amfareading')->id,
                'intro' => <<<INTRO
                هر مهارت زبانی، زیرمهارت‌هایی دارد که نوع‌ خواندن و ادراک ما از متن را تحث تأثیر قرار می‌دهد. در این 4 مجلد،12 زیرمهارت خواندن در قالب دوازده فصل (هر جلد سه فصل) ارائه می‌شود که هر فصل شامل 9 متن است که فقط و فقط به یک زیرمهارت خواندن می‌پردازد. این کتب در راستای آماده‌سازی فارسی‌آموزان / غیرفارسی‌زبانان برای آزمون‌های بین‌المللی زبان فارسی، مخصوصاً آمفا تهیه و تدوین شده‌اند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                    'amfa',
                ],
            ],
            //amfareading3
            [
                'title' => 'خواندن آمفا 3',
                'title_abbr' => 'amfareading3',
                'cover' => 'covers/amfareading3.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'amfareading')->id,
                'intro' => <<<INTRO
                هر مهارت زبانی، زیرمهارت‌هایی دارد که نوع‌ خواندن و ادراک ما از متن را تحث تأثیر قرار می‌دهد. در این 4 مجلد،12 زیرمهارت خواندن در قالب دوازده فصل (هر جلد سه فصل) ارائه می‌شود که هر فصل شامل 9 متن است که فقط و فقط به یک زیرمهارت خواندن می‌پردازد. این کتب در راستای آماده‌سازی فارسی‌آموزان / غیرفارسی‌زبانان برای آزمون‌های بین‌المللی زبان فارسی، مخصوصاً آمفا تهیه و تدوین شده‌اند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                    'amfa',
                ],
            ],
            //amfareading4
            [
                'title' => 'خواندن آمفا 4',
                'title_abbr' => 'amfareading4',
                'cover' => 'covers/amfareading4.jpg',
                'collection_id' => Collection::firstWhere('title_abbr', 'amfareading')->id,
                'intro' => <<<INTRO
                هر مهارت زبانی، زیرمهارت‌هایی دارد که نوع‌ خواندن و ادراک ما از متن را تحث تأثیر قرار می‌دهد. در این 4 مجلد،12 زیرمهارت خواندن در قالب دوازده فصل (هر جلد سه فصل) ارائه می‌شود که هر فصل شامل 9 متن است که فقط و فقط به یک زیرمهارت خواندن می‌پردازد. این کتب در راستای آماده‌سازی فارسی‌آموزان / غیرفارسی‌زبانان برای آزمون‌های بین‌المللی زبان فارسی، مخصوصاً آمفا تهیه و تدوین شده‌اند.
                INTRO,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'GholamHosein-Rezapour'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'reading',
                    'amfa',
                ],
            ],
            //howteachpersian
            [
                'title' => 'زبان فارسی را چگونه آموزش دهیم؟',
                'title_abbr' => 'howteachpersian',
                'cover' => 'covers/howteachpersian.jpg',
                'collection_id' => null,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'released')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Neveeseh-Parsi'),
                        'role_title' => Role::firstWhere('title_abbr', 'publisher'),
                    ],
                ],
                'tags' => [
                    'teaching',
                ],
            ],
            //1001nights
            [
                'title' => '1001 شب',
                'title_abbr' => '1001nights',
                'cover' => 'covers/1001nights.jpg',
                'collection_id' => null,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => null,
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
                    'educational-assistance',
                ],
            ],
            //persianwithmusic
            [
                'title' => 'آموزش فارسی با موسیقی',
                'title_abbr' => 'persianwithmusic',
                'cover' => 'covers/persianwithmusic.jpg',
                'collection_id' => null,
                'intro' => null,
                'status_id' => Status::firstWhere('title_abbr', 'under-construction')->id,
                'intro_video' => null,
                'teaching_video' => null,
                'elearning_link' => null,
                'bibliography_link' => null,
                'index_file' => null,
                'sample_file' => null,
                'buying_link' => null,
                'ebuying_link' => null,
                'audio_link' => null,
                'levels' => [
                    Level::firstWhere('title_abbr', 'b2'),
                    Level::firstWhere('title_abbr', 'b3'),
                    Level::firstWhere('title_abbr', 'c1'),
                ],
                'users' => [
                    [
                        'model' => User::firstWhere('name_en', 'Reza-Sahraee'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Hanieh-Mashayekhi'),
                        'role_title' => Role::firstWhere('title_abbr', 'writer'),
                    ],
                    [
                        'model' => User::firstWhere('name_en', 'Babak-Nobahari'),
                        'role_title' => Role::firstWhere('title_abbr', 'graphist'),
                    ],
                ],
                'tags' => [
                    'language-learning',
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
            $book->status_id = $book_data['status_id'];
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

            if ($book_data['levels'] !== null) {
                $book->levels()->saveMany($book_data['levels']);
            }

            if ($book_data['users'] !== null) {
                foreach ($book_data['users'] as $user) {
                    $book->users()->save(
                        $user['model'],
                        [
                        'role_id' => $user['role_title']->id,
                        ]
                    );
                }
            }
            if ($book_data['tags'] !== null) {
                foreach ($book_data['tags'] as $tag) {
                    $book->tags()->save(Tag::firstWhere('title_abbr', $tag));
                }
            }
        }
    }
}
