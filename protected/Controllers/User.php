<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 07.07.2016
 * Time: 11:41
 */

namespace App\Controllers;


use T4\Mvc\Controller;

class User
    extends Controller
{
    public function actionLogin($login = null)
    {
        if (null != $login) {
            $auth = new Identity();
            $auth->login($login);
            $this->redirect('/');
        }
    }
}