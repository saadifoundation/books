<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags_data = [
            [
                'title' => 'چهارمهارتی',
                'title_abbr' => '4skills',
            ],
            [
                'title' => 'خواندن',
                'title_abbr' => 'reading',
            ],
            [
                'title' => 'شنیدن',
                'title_abbr' => 'listening',
            ],
            [
                'title' => 'نوشتن',
                'title_abbr' => 'writing',
            ],
            [
                'title' => 'صحبت‌کردن',
                'title_abbr' => 'speaking',
            ],
            [
                'title' => 'دستور',
                'title_abbr' => 'grammar',
            ],
            [
                'title' => 'تلفظ',
                'title_abbr' => 'pronounciation',
            ],
            [
                'title' => 'واژه',
                'title_abbr' => 'vocabulary',
            ],
            [
                'title' => 'الفبا',
                'title_abbr' => 'alphabetic',
            ],
            [
                'title' => 'فرهنگ',
                'title_abbr' => 'culture',
            ],
            [
                'title' => 'زبان‌آموزی',
                'title_abbr' => 'language-learning',
            ],
            [
                'title' => 'ایران‌شناسی',
                'title_abbr' => 'iranology',
            ],
            [
                'title' => 'برای مدرسان',
                'title_abbr' => 'teaching',
            ],
            [
                'title' => 'کمک‌آموزشی',
                'title_abbr' => 'educational-assistance',
            ],
            [
                'title' => 'دوزبانه',
                'title_abbr' => '2languages',
            ],
        ];
        foreach ($tags_data as $tag_data) {
            $tag = new Tag;
            $tag->title = $tag_data['title'];
            $tag->title_abbr = $tag_data['title_abbr'];
            $tag->intro = '';
            $tag->save();
        }
    }
}
