<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $html = new \App\Category();
        $html->name = 'html';
        $html->slug = 'HTML';
        $html->save();

        $css = new \App\Category();
        $css->name = 'css';
        $css->slug = 'CSS';
        $css->save();

        $php = new \App\Category();
        $php->name = 'php';
        $php->slug = 'PHP';
        $php->save();
    }
}
