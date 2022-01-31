<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses_data = [
            [
                'title' => 'در دست تألیف',
                'title_abbr' => 'under-construction',
                'bootstrap_color' => 'warning',
            ],
            [
                'title' => 'در دست چاپ',
                'title_abbr' => 'under-press',
                'bootstrap_color' => 'info',
            ],
            [
                'title'=> 'چاپ‌شده',
                'title_abbr' => 'released',
                'bootstrap_color' => 'success',
            ],
        ];

        foreach ($statuses_data as $status_data) {
            $status = new Status;
            $status->title = $status_data['title'];
            $status->title_abbr = $status_data['title_abbr'];
            $status->bootstrap_color = $status_data['bootstrap_color'];
            $status->save();
        }
    }
}
