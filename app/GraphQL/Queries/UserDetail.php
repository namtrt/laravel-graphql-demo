<?php

namespace App\GraphQL\Queries;

class UserDetail
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return \App\Models\User::query()->find($args['id']);
    }
}
