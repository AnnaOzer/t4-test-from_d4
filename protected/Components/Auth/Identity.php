<?php

namespace App\Components\Auth;

use App\Models\User;

class Identity
{
    public function login($data)
    {
        $errors = new MultiException();

        if (empty($data->email)) {
            $errors->add(new Exception('Пустой email'));
        }

        if (empty($data->password)) {
            $errors->add(new Exception('Пустой пароль'));
        }

        if(!$errors->isEmpty()) {
            throw $errors;
        }
    }

    public function getUser()
    {
        return User::findByPK(1);
    }
}