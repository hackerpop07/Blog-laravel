<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $blog = new Blog();
            $blog->name = str_random(10);
            $blog->title = str_random(10);
            for ($j = 0; $j < 30; $j++) {
                $blog->contents .= str_random(7) . " ";
            }
            $blog->image = 'images/' . 'BIhRMKPm38WXsAU150n63muCMhx17nUpm8mciDGH.png';
            $blog->save();
        }
    }
}
