<?php

use Illuminate\Database\Seeder;

use App\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //n
        $level = new Level;
        $level->title = 'نوآموز';
        $level->title_abbr = 'n';
        $level->order = 1;
        $level->intro = 'این سطح اولین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'fed09e';
        $level->color = 'f7941d';
        $level->high_color = 'f16621';
        $level->save();

        //a
        $level = new Level;
        $level->title = 'مقدماتی';
        $level->title_abbr = 'a';
        $level->order = 2;
        $level->intro = 'این سطح دومین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'fbbea9';
        $level->color = 'ee1c25';
        $level->high_color = 'ba131a';
        $level->save();

        //b1
        $level = new Level;
        $level->title = 'پیش‌میانی';
        $level->title_abbr = 'b1';
        $level->order = 3;
        $level->intro = 'این سطح سومین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'c6e9fc';
        $level->color = '8dd8f8';
        $level->high_color = '3daed6';
        $level->save();

        //b2
        $level = new Level;
        $level->title = 'میانی';
        $level->title_abbr = 'b2';
        $level->order = 4;
        $level->intro = 'این سطح چهارمین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'bad2ee';
        $level->color = '2d93d1';
        $level->high_color = '2270a0';
        $level->save();

        //b3
        $level = new Level;
        $level->title = 'فوق‌میانی';
        $level->title_abbr = 'b3';
        $level->order = 5;
        $level->intro = 'این سطح پنجمین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = '80a0d3';
        $level->color = '0065b3';
        $level->high_color = '004c88';
        $level->save();

        //c1
        $level = new Level;
        $level->title = 'پیشرفته';
        $level->title_abbr = 'c1';
        $level->order = 6;
        $level->intro = 'این سطح ششمین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'c0e2ca';
        $level->color = '00a650';
        $level->high_color = '017337';
        $level->save();

        //c2
        $level = new Level;
        $level->title = 'فوق‌پیشرفته';
        $level->title_abbr = 'c2';
        $level->order = 7;
        $level->intro = 'این سطح هفتمین سطح آموزشی بنیاد سعدی است.';
        $level->low_color = 'bbafd5';
        $level->color = '63409a';
        $level->high_color = '422367';
        $level->save();
    }
}
