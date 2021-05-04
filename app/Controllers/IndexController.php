<?php

namespace Controllers;

use Core\Controller;
use Core\View;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $view = new View('home');
        $view->render('index');
    }
}
