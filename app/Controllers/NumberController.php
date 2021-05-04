<?php

namespace Controllers;

use Core\Controller;
use Models\Number;
use Core\View;

class NumberController extends Controller
{
    public function actionIndex()
    {
        $num = new Number();
        $data = $num->calculateInputData();

        $view = new View('task3');
        $view->render('task3', $data);
    }

    public function actionPhibonacci()
    {
        $obj = new Number();
        $chain = $obj->getPhibonacciNum();

        $view = new View('task4');
        $view->render('task4', $chain);
    }
}
