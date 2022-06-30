<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class CreatePost
{
    public function __invoke($_, array $args)
    {
        $post = new Post();
        $user = User::query()->findOrFail($args['user_id']);
        $category = Category::query()->findOrFail($args['category_id']);

        $post->title     = $args['title'];
        $post->user_id     = $user->id;
        $post->category_id    = $category->id;
        if (!empty($args['description'])) {
            $post->description = $args['description'];
        }

        if (!empty($args['description'])) {
            $post->content = $args['description'];
        }
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();

        $post->save();

        return $post;
    }
}
