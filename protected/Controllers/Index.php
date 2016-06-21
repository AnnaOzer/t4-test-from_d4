<?php

namespace App\Controllers;

use App\Components\Form;
use App\Components\Test;
use T4\Core\Exception;
use T4\Core\MultiException;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        try {
            
            $foo = new Test();
            
        } catch (MultiException $e) {

            foreach ($e as $error)  {
                echo $error->getMessage(); // Первая ошибкаВторая ошибка
            }
        }
        
        die;
    }

}