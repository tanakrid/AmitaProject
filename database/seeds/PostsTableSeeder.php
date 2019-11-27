<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->title = 'Hello World';
        $post->detail = 'This is first post';
        $post->view_count = 0;
        $post->save();

        factory(Post::class, 20)->create();
        factory(Post::class, 20)->states('popular')->create();
    }
}
