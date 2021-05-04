<div class="links">
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
            <?= System\Url::getLink('rew/tee', 'Task5', 'btn btn-dark') ?>
        </div>
    </div>
</div>