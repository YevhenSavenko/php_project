<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Models\File;

class FileController extends Controller
{
    public function actionIndex()
    {
        $file = new File();
        $files = $file->createBackup();

        $view = new View('task6');
        $view->render('task6', $files);
    }
}
