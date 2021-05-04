<?php

namespace Models;

use Core\Model;

class Product extends Model
{

    public function sortProduct()
    {
        $products = require_once ROOT . '/app/config/products.php';

        if (isset($_GET['sort']) && isset($_GET['order'])) {
            if (trim($_GET['sort']) === 'price') {
                switch ($_GET['order']) {
                    case '0':
                        array_multisort(array_column($products, 'price'), SORT_ASC, $products);
                        break;

                    case '1':
                        array_multisort(array_column($products, 'price'), SORT_DESC, $products);
                        break;
                }
            }
        }

        return ['products' => $products];
    }
}
