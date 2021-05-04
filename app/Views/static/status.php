<?php if (isset($status)) : ?>
    <?php switch ($status):
        case 'empty_fields': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-danger col-md-5 text-center" role="alert">
                    Field is empty
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'no_number': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-danger col-md-5 text-center" role="alert">
                    Invalid values
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'not_found': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-danger col-md-5 text-center" role="alert">
                    Not found path to files
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'movement_problem': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-danger col-md-5 text-center" role="alert">
                    Problems creating a backup
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'no_content': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-danger col-md-5 text-center" role="alert">
                    No content in this file
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'ok': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-success col-md-5 text-center" role="alert">
                    Success!!!
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'ok_files': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-success col-md-5 text-center" role="alert">
                    <?php if (isset($files)) : ?>
                        In backup was moved <?= count($files) > 1 || count($files) === 0 ? count($files) . ' files' :  count($files) . ' file' ?>
                    <?php endif ?>
                </div>
            </div>
            <?php break; ?>
        <?php
        case 'ok_delete': ?>
            <div class="row justify-content-center mb-3">
                <div class="alert alert-success col-md-5 text-center" role="alert">
                    <?php if (isset($count)) : ?>
                        Has been removed <?= $count > 1 || $count === 0 ? $count . ' files' :  $count . ' file' ?>
                    <?php endif ?>
                </div>
            </div>
            <?php break; ?>
    <?php endswitch ?>
<?php endif ?>