<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;

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
        DB::table('levels')->insert([
            'title' => 'نوآموز',
            'title_abbr' => 'n',
            'order' => 1,
            'intro' => 'این سطح اولین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'fed09e',
            'color' => 'f7941d',
            'high_color' => 'f16621',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //a
        DB::table('levels')->insert([
            'title' => 'مقدماتی',
            'title_abbr' => 'a',
            'order' => 2,
            'intro' => 'این سطح دومین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'fbbea9',
            'color' => 'ee1c25',
            'high_color' => 'ba131a',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //b1
        DB::table('levels')->insert([
            'title' => 'پیش‌میانی',
            'title_abbr' => 'b1',
            'order' => 3,
            'intro' => 'این سطح سومین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'c6e9fc',
            'color' => '8dd8f8',
            'high_color' => '3daed6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //b2
        DB::table('levels')->insert([
            'title' => 'میانی',
            'title_abbr' => 'b2',
            'order' => 4,
            'intro' => 'این سطح چهارمین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'bad2ee',
            'color' => '2d93d1',
            'high_color' => '2270a0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //b3
        DB::table('levels')->insert([
            'title' => 'فوق‌میانی',
            'title_abbr' => 'b3',
            'order' => 5,
            'intro' => 'این سطح پنجمین سطح آموزشی بنیاد سعدی است',
            'low_color' => '80a0d3',
            'color' => '0065b3',
            'high_color' => '004c88',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //c1
        DB::table('levels')->insert([
            'title' => 'پیشرفته',
            'title_abbr' => 'c1',
            'order' => 6,
            'intro' => 'این سطح ششمین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'c0e2ca',
            'color' => '00a650',
            'high_color' => '017337',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //c2
        DB::table('levels')->insert([
            'title' => 'فوق‌پیشرفته',
            'title_abbr' => 'c2',
            'order' => 7,
            'intro' => 'این سطح هفتمین سطح آموزشی بنیاد سعدی است',
            'low_color' => 'bbafd5',
            'color' => '63409a',
            'high_color' => '422367',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
