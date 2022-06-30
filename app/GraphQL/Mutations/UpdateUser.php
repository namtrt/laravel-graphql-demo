<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class UpdateUser
{
    public function __invoke($_, array $args)
    {
        $user           = User::query()->findOrFail($args['id']);
        if (!empty($args['name'])) {
            $user->name = $args['name'];
        }

        if (!empty($args['email'])) {
            $user->email = $args['email'];
        }

        $user->save();

        return $user;
    }
}
