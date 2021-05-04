<?php

namespace Models;

use Core\Model;

class Product extends Model
{

    public function sortProduct()
    {
        $product = require_once ROOT . '/app/config/products.php';

        if (isset($_GET['sort']) && isset($_GET['order'])) {
            if (trim($_GET['sort']) === 'price') {
                switch ($_GET['order']) {
                    case '0':
                        array_multisort(array_column($product, 'price'), SORT_ASC, $product);
                        break;

                    case '1':
                        array_multisort(array_column($product, 'price'), SORT_DESC, $product);
                        break;
                }
            }
        }

        return $product;
    }
}
