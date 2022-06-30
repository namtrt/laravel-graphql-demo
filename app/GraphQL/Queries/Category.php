<?php

namespace App\GraphQL\Queries;

class Category
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return \App\Models\Category::all();
    }
}
