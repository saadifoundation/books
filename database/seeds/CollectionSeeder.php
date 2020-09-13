<?php

use Illuminate\Database\Seeder;

use App\Collection;
use App\Tag;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections_data = [
            [
                'title' => 'مینا',
                'title_abbr' => 'mina',
                'tags' => [
                    '4skills',
                    'language-learning',
                ],
            ],
            [
                'title' => 'لذت خواندن',
                'title_abbr' => 'enjoyreading',
                'tags' => [
                    'reading',
                    'language-learning',
                ],
            ],
            [
                'title' => 'ایران‌شناسی',
                'title_abbr' => 'iranology',
                'tags' => [],
            ],
            [
                'title' => 'گام اول',
                'title_abbr' => '1ststep',
                'tags' => [],
            ],
            [
                'title' => 'چارچوب',
                'title_abbr' => 'persianframe',
                'tags' => [],
            ],
            [
                'title' => 'آموزش کاربردی واژه',
                'title_abbr' => 'persianinuse',
                'tags' => [],
            ],
            [
                'title' => 'شیراز',
                'title_abbr' => 'shiraz',
                'tags' => [],
            ],
            [
                'title' => 'استاندارد',
                'title_abbr' => 'persianstandard',
                'tags' => [],
            ],
            [
                'title' => 'سفر به ایران',
                'title_abbr' => 'trip2iran',
                'tags' => [],
            ],
            [
                'title' => 'روش‌های سادۀ آموزش زبان فارسی',
                'title_abbr' => 'easyteaching',
                'tags' => [],
            ],
            [
                'title' => 'خمره',
                'title_abbr' => 'khomreh',
                'tags' => [],
            ],
            [
                'title' => 'سلام دکتر',
                'title_abbr' => 'hidr',
                'tags' => [],
            ],
        ];
        foreach ($collections_data as $collection_data) {
            $collection = new Collection;
            $collection->title = $collection_data['title'];
            $collection->title_abbr = $collection_data['title_abbr'];
            $collection->intro = '';
            $collection->save();
            foreach ($collection_data['tags'] as $tag) {
                $collection->tags()->save(Tag::firstWhere('title_abbr', $tag));
            }
        }
    }
}
