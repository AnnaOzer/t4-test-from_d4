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
        $this->app->assets->publish('/Layouts/assets');
        $this->app->assets->publishCssFile('/Layouts/assets/test.css');
     

    }

}