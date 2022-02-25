<?php defined('_EXEC') or die; ?>

<div id="page">
    %{main-header}%

    <main id="main-content">
        <section class="page-header align-items-center d-flex flex-column justify-content-center">
            <figure>
                <img src="{$path.uploads}<?= $data['image'] ?>" alt="" class="img-cover">
            </figure>

            <div class="container">
                <h1 class="text__h text-center m-0 text-light m-b-40"><?= $data['title'] ?></h1>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <?= json_decode($data['content']) ?>
            </div>
        </section>
        <section class="p-tb-50" style="background-color: #f5f5f5;">
            <div class="container">
                <h1 class="text-uppercase m-b-30 font-weight-bold">Contáctanos</h1>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: "7235449",
                        formId: "85c4ab2b-8b9a-46dc-a84b-15a75e24ed47"
                    });
                </script>
            </div>
        </section>
    </main>
</div>
