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
        $book = new Book;
        $collection = Collection::firstWhere('title_abbr', 'mina');
        $book->title = 'مینا 1';
        $book->title_abbr = 'mina1';
        $book->cover = 'covers/mina1.jpg';
        $book->collection_id = $collection->id;
        $book->intro = <<<INTRO
            اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
            مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
            مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
            مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
            INTRO;
        $book->intro_video = '';
        $book->teaching_video = '';
        $book->elearning_link = 'https://mina.saadifoundation.ir';
        $book->bibliography_link = 'http://opac.nlai.ir/opac-prod/bibliographic/5759815';
        $book->index_file = 'indexes/mina1.pdf';
        $book->sample_file = 'samples/mina1.pdf';
        $book->buying_link = '';
        $book->ebuying_link = '';
        $book->audios_link = 'audios_zip/mina1.zip';
        $book->save();
        
        $book->levels()->saveMany([
            Level::firstWhere('title_abbr', 'a'),
            Level::firstWhere('title_abbr', 'b1'),
        ]);

        $writer_users = [
            User::firstWhere('name', 'رضامراد صحرایی'),
            User::firstWhere('name', 'افسانه غریبی'),
        ];
        foreach ($writer_users as $user) {
            $book->users()->save(
                $user,
                [
                'role_id' => Role::firstWhere('title_abbr', 'writer')->id,
                ]
            );
        }
    }
}
