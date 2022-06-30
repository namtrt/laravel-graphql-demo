<?php

namespace App\GraphQL\Queries;

class User
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): array
    {
        $query = \App\Models\User::query();
        if (isset($args['whereEmail'])) {
            $query->where('email', 'like', '%' . $args['whereEmail'] . '%');
        }

        if (isset($args['id'])) {
            $query->where('id', $args['id']);
        }

        return $query->paginate()->toArray();
    }
}
