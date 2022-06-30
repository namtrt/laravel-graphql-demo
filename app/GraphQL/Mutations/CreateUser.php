<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser
{
    public function __invoke($_, array $args)
    {
        $user           = new User();
        $user->name     = $args['name'];
        $user->email    = $args['email'];
        $user->password = Hash::make($args['email']);
        $user->save();

        return $user;
    }
}
