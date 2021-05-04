<?php if (isset($status) && !empty($status)) : ?>
    <?php require_once ROOT . '/app/Views/static/status.php' ?>
<?php endif ?>

<div class="row justify-content-center">
    <h2 class="text-uppercase fw-bold mb-5 fs-5 text-center"><?= $this->getTitle() ?></h2>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-md-4 text-center">
        <div>
            <label for="inputEmail4" class="form-label fw-bold mb-3">Enter the number of digits of the Fibonacci number: </label>
            <input type="number" class="form-control" id="inputEmail4" name="number-form" value="20">
        </div>

        <input name="show-nums" class="input__btn btn btn-dark text-uppercase fw-bold mt-4" type="submit" value="Get info">
    </form>
</div>