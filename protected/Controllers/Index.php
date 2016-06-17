<?php

namespace App\Controllers;

use App\Components\Login;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $data = new Login();
        $data->email = 'test.com';

        var_dump($data->email);
        die;
    }

}