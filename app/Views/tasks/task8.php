<?php if (isset($status)) : ?>
    <?php require_once ROOT . '/app/Views/static/status.php' ?>
<?php endif ?>

<div>
    <div>
        <div>
            <?php if (isset($originalContent)) : ?>
                <h3 class="text-center text-uppercase mt-5 fw-bold">Original Text:</h3>
                <div class="mt-4">
                    <?= $originalContent ?>
                </div>
            <?php endif ?>
        </div>
        <?php if (isset($remakeContent)) : ?>
            <h3 class="text-center text-uppercase mt-5 fw-bold">Remake Text:</h3>
            <div class="mt-5">
                <?= $remakeContent ?>
            </div>
        <?php endif ?>
    </div>
</div>