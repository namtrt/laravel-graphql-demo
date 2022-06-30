<?php

namespace App\GraphQL\Queries;

class Post
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return \App\Models\Post::all();
    }
}
