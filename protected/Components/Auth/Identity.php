<?php

namespace App\Components\Auth;

use App\Models\User;

class Identity
{
    public function getUser()
    {
        return User::findByPK(1);
    }
}