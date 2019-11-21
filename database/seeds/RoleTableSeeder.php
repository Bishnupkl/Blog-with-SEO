<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Role();
        $admin->name = 'admin';
        $admin->save();

        $author = new \App\Role();
        $author->name = 'author';
        $author->save();

        $subsciber = new \App\Role();
        $subsciber->name = 'subsciber';
        $subsciber->save();
    }
}
