<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;
use Carbon\Carbon;

class UpdateCategory
{
    public function __invoke($_, array $args)
    {
        $category           = Category::query()->findOrFail($args['id']);
        $category->name     = $args['name'];
        if (!empty($args['description'])) {
            $category->description = $args['description'];
        }
        $category->updated_at = Carbon::now();

        $category->save();

        return $category;
    }
}
