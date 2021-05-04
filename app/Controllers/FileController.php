<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Models\File;

class FileController extends Controller
{
    public function actionIndex()
    {
        $objFile = new File();
        $files = $objFile->createBackup();

        $view = new View('task6');
        $view->render('task6', $files);
    }

    public function actionDelete()
    {
        $objFile = new File();
        $filesDelete = $objFile->deteteFiles();

        $view = new View('task7');
        $view->render('task7', $filesDelete);
    }

    public function actionRemake()
    {
        $objFile = new File();
        $filesRemake = $objFile->remakeFile();

        $view = new View('task8');
        $view->render('task8', $filesRemake);
    }
}
