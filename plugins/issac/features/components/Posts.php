<?php namespace Issac\Features\Components;

use Cms\Classes\ComponentBase;
use Issac\Features\Models\Post;

class Posts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'posts Component',
            'description' => 'get all posts'
        ];
    }

    // This array becomes available on the page as {{ component.posts }}
    public function posts()
    {
        return Post::all();
    }

    public function defineProperties()
    {
        return [];
    }
}
