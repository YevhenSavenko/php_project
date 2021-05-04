<?php if (isset($status) && !empty($status)) : ?>
    <?php require_once ROOT . '/app/Views/static/status.php' ?>
<?php endif ?>

<div class="form__wrapper row justify-content-center">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-md-5 text-center">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-uppercase fw-bold mb-3 fs-5"><?= $this->getTitle() ?> </label>
            <textarea name="numbers" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter numbers..."></textarea>
        </div>

        <input name="info" class="input__btn btn btn-dark text-uppercase fw-bold mt-4" type="submit" value="Get info">
    </form>
</div>

<?php if (isset($data) && is_array($data) && count($data) > 1) : ?>
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <p>
                Sum numbers:
                <span class="fw-bold">
                    <?= $sum ?>
                </span>
            </p>
            <p>
                Average:
                <span class="fw-bold">
                    <?= $average ?>
                </span>
            </p>
            <p>
                Even nums:
                <span class="fw-bold">
                    <?= $evenOdd['even']['numsEven'] !== '' ? $evenOdd['even']['numsEven'] : 'No nums' ?>
                </span>.
                Count even nums:
                <span class="fw-bold">
                    <?= $evenOdd['even']['countEven'] ?>
                </span>
            </p>
            <p>
                Odd nums:
                <span class="fw-bold">
                    <?= $evenOdd['odd']['numsOdd'] !== '' ? $evenOdd['odd']['numsOdd'] : 'No nums' ?>
                </span>.
                Count odd nums:
                <span class="fw-bold">
                    <?= $evenOdd['odd']['countOdd'] ?>
                </span>
            </p>
        </div>
    </div>
<?php endif ?>