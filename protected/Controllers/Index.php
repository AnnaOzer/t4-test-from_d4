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
            
            $form = new Form();
            $form->fill([
                'email' => '123',
                'password' => 'й'
            ]);
            
        } catch (MultiException $e) {

            $this->data->errors = $e;

            foreach ($e as $error)  {
                echo $error->getMessage(); // Неверный emailСлишком короткий пароль
            }

            unset($e[0]);
            throw $e;
        }



        die;
    }

}