<?php

namespace App\Controllers;

use App\Components\Form;
use T4\Core\Exception;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        try {
            
            $data = new Form();
            $data->email = 'test@test.com';
            $data->phone = '+7 910 123-45-67';
            
            var_dump($data->phone); // string(11) "79101234567"
            
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
        
        die;
    }

}