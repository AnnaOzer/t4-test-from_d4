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

    public function actionDefault($form = null)
    {
        try {
            $data = new Form();
            $data->fill($form);

            // $data->save();
            
            echo 'Данные ОК';
            die;

        } catch (MultiException $errors) {

            $this->data->errors = $errors;
        }

        $this->data->form = $form;
    }

}