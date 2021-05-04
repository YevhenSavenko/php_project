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
        $productReturned = $product->getSortedProducts();

        $view = new View('task2');
        $view->render('task2', $productReturned);
    }

    public function actionSort()
    {
        $product = new Product();
        $productReturned = $product->sortProductWithDiscount();

        $view = new View('task5');
        $view->render('task5', $productReturned);
    }
}
