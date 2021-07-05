<?php

namespace App\Policies;

use App\User;
use App\Trailer;

use Illuminate\Auth\Access\HandlesAuthorization;

class TrailerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pass(User $user, Trailer $trailer)
    {
        return $user->id == $trailer->user_id;
    }
}
