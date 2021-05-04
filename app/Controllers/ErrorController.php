<?php

namespace Controllers;

use Core\Controller;
use Core\View;

class ErrorController extends Controller
{
    public function actionIndex()
    {
        $view = new View('error');
        $view->render('error/404');
    }
}
