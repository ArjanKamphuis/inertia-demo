<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->email === 'john@example.com';
    }

    public function edit(User $user, User $model): bool
    {
        return !! mt_rand(0, 1);
    }
}
