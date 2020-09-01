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
        $role = new Role;
        $role->title = "نویسنده";
        $role->title_abbr = "writer";
        $role->group = "writing";
        $role->save();

        $role = new Role;
        $role->title = "مترجم";
        $role->title_abbr = "translator";
        $role->group = "writing";
        $role->save();

        $role = new Role;
        $role->title = "ویراستار";
        $role->title_abbr = "editor";
        $role->group = "writing";
        $role->save();

        $role = new Role;
        $role->title = "گرافیست";
        $role->title_abbr = "graphist";
        $role->group = "graphic";
        $role->save();
    }
}
