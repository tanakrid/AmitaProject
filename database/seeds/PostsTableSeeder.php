<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)->create([
            'user_id' => 10
        ]);
    }
}
