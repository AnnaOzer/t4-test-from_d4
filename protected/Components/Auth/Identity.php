<?php

namespace App\Components\Auth;

use App\Models\User;
use App\Models\UserSession;
use T4\Http\Helpers;

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

        // в этот момент мы точно знаем, что пользователь у нас зашел
        // создадим длинный и случайный хеш

        $hash = sha1(microtime() . mt_rand());
        $session = new UserSession();
        $session->hash = $hash;
        $session->user = $user;
        $session->save();

        Helpers::setCookie('t4auth', $hash, time()+ 30*24*60*60);

    }

    public function getUser()
    {
        if (Helpers::issetCookie('t4auth')) {

            if(!empty($hash = Helpers::getCookie('t4auth'))) {
                if(!empty($session = UserSession::findByHash($hash))) {
                    return $session->user;
                }
            }
        }

        return null;
    }
}