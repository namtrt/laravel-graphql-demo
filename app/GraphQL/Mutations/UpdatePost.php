<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Carbon\Carbon;

class UpdatePost
{
    public function __invoke($_, array $args)
    {
        $post = Post::query()->findOrFail($args['id']);
        $post->title     = $args['title'];
        if (!empty($args['description'])) {
            $post->description = $args['description'];
        }

        if (!empty($args['description'])) {
            $post->content = $args['description'];
        }

        $post->updated_at = Carbon::now();

        $post->save();

        return $post;
    }
}
