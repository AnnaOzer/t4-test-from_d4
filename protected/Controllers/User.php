<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 07.07.2016
 * Time: 11:41
 */

namespace App\Controllers;


use App\Components\Auth\Identity;
use App\Components\Auth\MultiException;
use T4\Mvc\Controller;

class User
    extends Controller
{
    public function actionLogin($login = null)
    {
        if (null != $login) {

            try {
                $auth = new Identity();
                $auth->login($login);
                $this->redirect('/');

            } catch (MultiException $e) {
                $this->data->errors = $e;
            };

        }
    }
}