<?php

namespace App\Controllers;

use App\Components\Login;
use T4\Core\Exception;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        try {
            
            $data = new Login();
            $data->email = 'test@test.com';
            $data->name = 'Иван Иванов';
            $data->age = 42;
            
            var_dump($data->email);
            
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
        
        die;
    }

}