<?php

namespace Models;

use Core\Model;

class Product extends Model
{
    public function sortProduct($products, $field)
    {
        if (isset($_GET['sort']) && isset($_GET['order'])) {
            if (trim($_GET['sort']) === 'price') {
                switch ($_GET['order']) {
                    case '0':
                        array_multisort(array_column($products, $field), SORT_ASC, $products);
                        break;

                    case '1':
                        array_multisort(array_column($products, $field), SORT_DESC, $products);
                        break;
                }
            }
        }

        return ['products' => $products];
    }


    public function getSortedProducts()
    {
        $products = require_once ROOT . '/app/config/products.php';

        return $this->sortProduct($products, 'price');
    }

    public function sortProductWithDiscount()
    {
        $products = require_once ROOT . '/app/config/productsDiscount.php';

        foreach ($products as $key => $value) {
            if (isset($products[$key]['discount']) && $products[$key]['discount'] > 0) {
                $products[$key]['totalSumWithDiscount'] = round($products[$key]['price'] - ($products[$key]['price'] * $products[$key]['discount']), 2);
            } else {
                $products[$key]['totalSumWithDiscount'] = $products[$key]['price'];
            }
        }

        return $this->sortProduct($products, 'totalSumWithDiscount');
    }
}
