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

        $user = User::findByEmail($data->email);

        if (empty($user)) {
            $errors->add(new Exception('Такой email в базе не найден'));
            throw $errors;
        }

        // здесь мы точно знаем что такой пользователь у нас в базе есть
        // и надо проверить пароль

        if (!password_verify($data->password, $user->password)) {
            $errors->add(new Exception('Неверный пароль'));
            throw $errors;
        };

        echo 'SUCCESS!';
        die;
    }

    public function getUser()
    {
        return User::findByPK(1);
    }
}