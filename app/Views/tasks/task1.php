<?php if (isset($sorted) && $sorted === 'empty_fields') : ?>
    <div class="row justify-content-center mb-3">
        <div class="alert alert-danger col-md-5 text-center" role="alert">
            Field is empty
        </div>
    </div>
<?php endif ?>

<?php if (isset($sorted) && !empty($sorted) && $sorted !== 'empty_fields') :  ?>
    <div class="row justify-content-center mb-3">
        <div class="alert alert-success col-md-5 text-center" role="alert">
            Sorting was successful
        </div>
    </div>
<?php endif ?>

<div class="form__wrapper row justify-content-center">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-md-5 text-center">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-uppercase fw-bold mb-3 fs-5"><?= $this->getTitle() ?> </label>
            <textarea name="names" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter names..."></textarea>
        </div>

        <input name="sort" class="input__btn btn btn-dark text-uppercase fw-bold mt-4" type="submit" value="Sort">
    </form>
</div>

<?php if (isset($sorted) && !empty($sorted) && $sorted !== 'empty_fields') : ?>
    <h3 class="text-center text-uppercase mt-5 fw-bold">Result:</h3>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8 fs-5 text-center">
            <?= $sorted ?>.
        </div>
    </div>
<?php endif ?>