<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class DeleteUser
{
    public function __invoke($_, array $args)
    {
        $user           = User::query()->findOrFail($args['id']);
        $user->delete();

        return $user;
    }
}
