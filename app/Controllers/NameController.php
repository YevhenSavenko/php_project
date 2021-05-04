<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Models\Name;

class NameController extends Controller
{

    public function actionIndex()
    {
        $sort = new Name();
        $data = $sort->sortNames();

        $view = new View('task1');
        $view->render('task1', $data);
    }
}
