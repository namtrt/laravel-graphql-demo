<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;

class DeleteCategory
{
    public function __invoke($_, array $args)
    {
        $category = Category::query()->findOrFail($args['id']);
        $category->delete();

        return $category;
    }
}
