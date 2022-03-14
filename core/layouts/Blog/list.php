<?php defined('_EXEC') or die; ?>

<div id="page">
    %{main-header}%

    <main id="main-content">
        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase m-b-30">Lifestyle</h1>

                <div class="row">
                    <?php foreach ( $data as $key => $value ): ?>
                        <div class="col-12 col-md-3">
                            <a href="/lifestyle/<?= $value['url'] ?>">
                                <div class="card" style="border: none;">
                                    <figure class="neo-blog">
                                        <img class="card-img-top img-fluid" src="{$path.uploads}<?= $value['image'] ?>" alt="">
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-text"><strong class="text-uppercase"><?= $value['title'] ?></strong></p>
                                        <p class="card-text text-muted">@neoterremx</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="suscribe" style="background-image: url('{$path.uploads}Enmascarar grupo 36@2x.png')">
            <div class="container">
                <h1>{$lang.suscribe}</h1>
                <h6>{$lang.idx_25}</h6>
                <form>
                    <input type="text" placeholder="Email" />
                    <button class="btn btn-dark text-uppercase font-weight-bold">{$lang.send}</button>
                </form>
            </div>
        </section>

        <section class="p-tb-50" style="background-color: #f5f5f5;">
            <div class="container">
                <h1 class="text-uppercase m-b-30 font-weight-bold">{$lang.contact_us}</h1>
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
