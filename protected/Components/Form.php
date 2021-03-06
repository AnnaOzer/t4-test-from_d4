<?php

namespace App\Components;

use T4\Core\Exception;
use T4\Core\Std;

/**
 * Class Form
 * @package App\Components
 *
 * @property string $login
 * @property string $email
 */

class Form
    extends Std
{
    protected function validateEmail($val)
    {
        if (false === strpos($val, '@')) {
            yield new Exception('Некорректный email');
        }
        if (!preg_match('~[a-z0-9\@\.-]~i', $val)) {
            yield new Exception('Неверные символы в email');
        }
        return true;
    }

    protected function validateLogin($val) {
        if (strlen($val)<=3) {
            yield new Exception('Слишком короткий логин');
        }
        if (!preg_match('~[a-z0-9]~i', $val)) {
            yield new Exception('Неверные символы в логине');
        }
        return true;
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