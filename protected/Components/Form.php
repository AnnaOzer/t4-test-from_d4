<?php

namespace App\Components;

use T4\Core\Exception;
use T4\Core\Std;

/**
 * Class Form
 * @package App\Components
 *
 * @property string $email
 */

class Form
    extends Std
{
    protected function validateEmail($val)
    {
        if (false === strpos($val, '@')) {
            throw new Exception('Неверный email');
        }
        return true;
    }

    protected function validatePassword($val) {
        if (strlen($val)<=3) {
            throw new Exception('Слишком короткий пароль');
        }
        if (!preg_match('~[a-z0-9]~i', $val)) {
            throw new Exception('Неверные символы в пароле');
        }
    }
/*
    protected function validatePhone($val)
    {
        if (!preg_match('~\D{11}~', $val)) {
            throw new Exception('Неверный телефон');
        }

        return true;
    }
*/
    protected function sanitizePhone($val)
    {
        return preg_replace('~\D+~', '', $val);
    }
}