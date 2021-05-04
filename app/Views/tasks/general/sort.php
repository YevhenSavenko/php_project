<div class="row justify-content-center">
    <div class="dropdown col-md-3">
        <a class="btn btn-secondary dropdown-toggle py-2 px-4 mb-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (isset($_GET['sort']) && isset($_GET['order'])) : ?>
                <?php switch ($_GET['order']):
                    case '0':
                        echo 'Від дешевших до дорожчих';
                        break;
                    case '1':
                        echo 'Від дорожчих до дешевших';
                        break;
                endswitch ?>
            <?php else : ?>
                <?= 'Виберіть тип сортування' ?>
            <?php endif ?>
        </a>

        <ul class="dropdown-menu py-2 px-4" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF'] ?>?sort=price&order=0">Від дешевших до дорожчих</a>
            <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF'] ?>?sort=price&order=1">Від дорожчих до дешевших</a>
        </ul>
    </div>
</div>