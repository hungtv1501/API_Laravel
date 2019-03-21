<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $post = new \App\Post();
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. ';
        $post->save();

        $post = new \App\Post();
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. ';
        $post->save();

        $post = new \App\Post();
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. ';
        $post->save();

    }

}
