<?php

namespace Controllers;

use Core\Controller;
use Models\Product;
use Core\View;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $product = new Product();
        $productReturned = $product->sortProduct();

        $view = new View('task2');
        $view->render('task2', $productReturned);
    }
}
