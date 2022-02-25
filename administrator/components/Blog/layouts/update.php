<?php
defined('_EXEC') or die;

use \BuriPHP\System\Libraries\{Format,Security};
use \BuriPHP\Administrator\Components\Blog\Component;

// Pages
$this->dependencies->add(['js', '{$path.components}Blog/assets/js/update.js?v=1.0.0']);

// Buttons
$this->dependencies->add(['other', '<script>$.app.addButtonsAction({
    "button": {
        "text": "Multimedia",
        "class": "btn waves-effect waves-light",
        "href": "javascript:void(0);",
        "onclick": "window.open(\'index.php/media\', \'_blank\', \'location=yes,height=570,width=520,scrollbars=yes,status=yes\');",
    }
})</script>']);

$this->dependencies->add(['other', '<script>$.app.addButtonsAction({
    "dropdown": {
        "label": "Administrar",
        "dropdown": [
            {
                "text": "Categorías",
                "href": "javascript:void(0);",
                "data-button-modal": "categories"
            }
        ]
    }
})</script>']);

$this->dependencies->add(['other', '<script>$.app.addButtonsAction({
    "button": {
        "id": "save",
        "text": "Actualizar",
        "class": "btn btn-success waves-effect waves-light",
        "href": "javascript:void(0);",
    }
})</script>']);
?>
<main class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <ol class="breadcrumb hide-phone">
                        <li class="breadcrumb-item">
                            <a href="index.php">{$_webpage}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="index.php/blog">Blog</a>
                        </li>
                        <li class="breadcrumb-item active"><?= $data['title'] ?></li>
                    </ol>

                    <h4 class="page-title">Actualizar: <?= $data['title'] ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <form name="update" class="row font-14">
            <?= $this->format->get_file( Security::DS(Component::LAYOUTS . 'templates/form.php'), ['data' => $data] ); ?>
        </form>
    </div>
</main>

<?= $this->format->get_file( Security::DS(Component::LAYOUTS . 'modals/categories.php'), null ) ?>