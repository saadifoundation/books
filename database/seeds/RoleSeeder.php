<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_data = [
            [
                'title' => 'نویسنده',
                'title_abbr' => 'writer',
                'group' => 'writing',
            ],
            [
                'title' => 'مترجم',
                'title_abbr' => 'translator',
                'group' => 'writing',
            ],
            [
                'title' => 'ویراستار',
                'title_abbr' => 'editor',
                'group' => 'writing',
            ],
            [
                'title' => 'همکار تألیف',
                'title_abbr' => 'co-writer',
                'group' => 'writing',
            ],
            [
                'title' => 'ناظر علمی',
                'title_abbr' => 'scientific-supervisor',
                'group' => 'writing',
            ],
            [
                'title' => 'گرافیست',
                'title_abbr' => 'graphist',
                'group' => 'graphic',
            ],
            [
                'title' => 'ناشر',
                'title_abbr' => 'publisher',
                'group' => 'writing',
            ],
        ];
        foreach ($roles_data as $role_data) {
            $role = new Role;
            $role->title = $role_data['title'];
            $role->title_abbr = $role_data['title_abbr'];
            $role->group = $role_data['group'];
            $role->save();
        }
    }
}
