<?php

/**
 * Created by PhpStorm.
 * User: eduardocolombo
 * Date: 16/09/16
 * Time: 19:01
 */
class PostsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(App\Post::class, 10)->create();
    }
}