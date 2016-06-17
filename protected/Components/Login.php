<?php

namespace App\Components;

use T4\Core\Exception;
use T4\Core\Std;

/**
 * Class Login
 * @package App\Components
 *
 * @property string $email
 */

class Login
    extends Std
{
    protected function validateEmail($val)
    {
        if (false === strpos($val, '@')) {
            throw new Exception('Неверный email');
        }
        return true;
    }
}