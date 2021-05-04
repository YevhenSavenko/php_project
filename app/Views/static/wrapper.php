<?php if (substr(strtolower($this->title), 0, 4) === 'task') : ?>
    <?php require_once ROOT . '/app/Views/static/targetDescript.php' ?>
        <?php require_once ROOT . "/app/Views/tasks/{$path}.php" ?>
    <?php require_once ROOT . '/app/Views/static/buttonHome.php' ?>

    <?php else : ?>
        <?php require_once ROOT . "/app/Views/{$path}.php" ?>
<?php endif ?>
