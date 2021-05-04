<?php require_once ROOT . '/app/Views/tasks/general/sort.php' ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <p class="sku">Код: <?php echo $product['sku'] ?></p>
                <h4>
                    <?php echo $product['name'] ?>
                </h4>
                <p> Ціна: <span class="price">
                        <?php echo $product['price'] ?>
                    </span> грн</p>
                <p>
                    <?php if (!$product['qty'] > 0) : ?>
                        <?= 'Нема в наявності' ?>
                    <?php endif ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>