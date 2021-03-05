<?php namespace Issac\Features\Updates;

use Seeder;
use Issac\Features\Models\Post;

class SeedPostsTable extends Seeder
{
    public function run()
    {
        $post1 = Post::create(
            [
              'title'                 => 'Title 1',
              'content'               => 'Content 1'
            ]
        );

        $post2 = Post::create(
            [
              'title'                 => 'Title 2',
              'content'               => 'Content 2'
            ]
        );

        $post3 = Post::create(
            [
              'title'                 => 'Title 3',
              'content'               => 'Content 3'
            ]
        );
    }
}
