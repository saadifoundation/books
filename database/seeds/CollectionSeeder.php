<?php

use Illuminate\Database\Seeder;

use App\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = new Collection;
        $collection->title = 'مینا';
        $collection->title_abbr = 'mina';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'لذت خواندن';
        $collection->title_abbr = 'enjoyreading';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'ایران‌شناسی';
        $collection->title_abbr = 'iranology';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'گام اول';
        $collection->title_abbr = '1ststep';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'چارچوب';
        $collection->title_abbr = 'persianframe';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'آموزش کاربردی واژه';
        $collection->title_abbr = 'persianinuse';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'شیراز';
        $collection->title_abbr = 'shiraz';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'استاندارد';
        $collection->title_abbr = 'persianstandard';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'سفر به ایران';
        $collection->title_abbr = 'trip2iran';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'روش‌های سادۀ آموزش زبان فارسی';
        $collection->title_abbr = 'easyteaching';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'خمره';
        $collection->title_abbr = 'khomreh';
        $collection->intro = '';
        $collection->save();

        $collection = new Collection;
        $collection->title = 'سلام دکتر';
        $collection->title_abbr = 'hidr';
        $collection->intro = '';
        $collection->save();
    }
}
