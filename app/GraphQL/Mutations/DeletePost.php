<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Carbon\Carbon;

class DeletePost
{
    public function __invoke($_, array $args)
    {
        $post = Post::query()->findOrFail($args['id']);
        $post->delete();

        return $post;
    }
}
