<?php

namespace App\Components;

use T4\Core\Exception;
use T4\Core\MultiException;
use T4\Core\Std;

class Test
    extends Std
{
    public function __construct()
    {
        $errors = new MultiException();

        $errors->add(new Exception('Первая ошибка'));
        $errors->add(new Exception('Вторая ошибка'));

        if (!$errors->isEmpty()) {
            throw $errors;
        }
    }
}