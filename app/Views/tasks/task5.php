<?php require_once ROOT . '/app/Views/tasks/general/sort.php' ?>



<div class="row justify-content-center">
    <div class="col-md-6">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <p class="sku">Код: <?php echo $product['sku'] ?></p>
                <h4>
                    <?php echo $product['name'] ?>
                </h4>
                <p> Ціна:
                    <span class="price">
                        <s><?php echo $product['price'] ?></s>
                    </span> грн
                </p>
                <p>
                    Нова ціна:
                    <span class="price">
                        <?= $product['totalSumWithDiscount'] ?>
                    </span> грн
                    <span>
                        <?php if (isset($product['discount']) && $product['discount'] > 0) : ?>
                            <span class="price"><?= '(-' . $product['discount'] * 100 . '%)' ?></span>
                        <?php endif ?>
                    </span>
                </p>
                <p>
                    <?php if (!$product['qty'] > 0) : ?>
                        <?= 'Нема в наявності' ?>
                    <?php endif ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>