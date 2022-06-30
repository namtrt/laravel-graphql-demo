<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;
use Carbon\Carbon;

class CreateCategory
{
    public function __invoke($_, array $args)
    {
        $category           = new Category();
        $category->name     = $args['name'];
        if (!empty($args['description'])) {
            $category->description = $args['description'];
        }
        $category->created_at = Carbon::now();
        $category->updated_at = Carbon::now();

        $category->save();

        return $category;
    }
}
