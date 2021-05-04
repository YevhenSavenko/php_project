<?php if (isset($status) && !empty($status)) : ?>
    <?php require_once ROOT . '/app/Views/static/status.php' ?>
<?php endif ?>

<div class="row justify-content-center">
    <h2 class="text-uppercase fw-bold mb-3 fs-5 text-center"><?= $this->getTitle() ?></h2>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-md-4 text-center">
        <div>
            <label for="inputEmail4" class="form-label fw-bold mb-3">Enter the number of digits of the Fibonacci number: </label>
            <input type="number" class="form-control" id="inputEmail4" name="number-form" value="20">
        </div>

        <input name="show-nums" class="input__btn btn btn-dark text-uppercase fw-bold mt-4" type="submit" value="Get info">
    </form>
</div>

<?php if (isset($classicMethod) && isset($recursionMethod)) : ?>
    <h3 class="text-center text-uppercase mt-5 fw-bold">Result:</h3>
    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <div class="fs-5">
                <b>Classic method:</b> <?= $classicMethod ?>.
            </div>
            <div class="mt-4 fs-5">
                <b>Recursion method:</b> <?= $classicMethod ?>.
            </div>
        </div>
    </div>
<?php endif ?>