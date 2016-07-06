<?php

namespace App\Controllers;

use App\Components\Form;
use App\Components\Test;
use App\Models\User;
use T4\Core\Exception;
use T4\Core\MultiException;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    protected function access($action, $params=[])
    {
        var_dump( $this->app->user ); // NULL
        return true;
    }

    public function actionDefault()
    {
        /*echo password_hash(123456, PASSWORD_DEFAULT);
        die;
        */
        var_dump( User::findAll() );
        die;
    }

}