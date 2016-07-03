<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 03.07.2016
 * Time: 16:47
 */

namespace App\Controllers;


use T4\Mvc\Controller;

class Items
    extends Controller
{
    public function actionLast($num)
    {
        $this->data->items = range(1, $num);
    }
}