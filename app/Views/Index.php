<div class="links" style="margin-top: 150px">
    <div class="row">
        <h3 class="links__title text-uppercase text-center my-5">
            section 5
        </h3>
    </div>
    <div class="row justify-content-between text-center">
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . '/name/index', 'Task1', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . '/product/index', 'Task2', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . 'number/index', 'Task3', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . 'number/phibonacci', 'Task4', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . 'product/sort', 'Task5', 'btn btn-dark') ?>
        </div>
    </div>

    <div class="row mt-5">
        <h3 class="links__title text-uppercase text-center my-5">
            section 6
        </h3>
    </div>
    <div class="row justify-content-evenly text-center">
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . '/file/index', 'Task6', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . '/product/index', 'Task7', 'btn btn-dark') ?>
        </div>
        <div class="links__item col-md-2 text-uppercase">
            <?= System\Url::getLink($this->getBP() . 'number/index', 'Task8', 'btn btn-dark') ?>
        </div>
    </div>
</div>