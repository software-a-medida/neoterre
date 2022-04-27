<?php
defined('_EXEC') or die;

// Owl Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/dist/owl.carousel.min.js']);

// Page
$this->dependencies->add(['js', '{$path.js}pages/index.js?v=1.0.2']);
?>

<div id="page">
    %{main-header}%

    <style>
        .home-cover .owl-controls button {
            position: absolute;
            top: -120px;
            bottom: 0;
            color: #FFF;
            z-index: 1;
            border: none;
            background-color: transparent;
            font-size: 5rem;
            height: min-content;
            line-height: 1rem;
            padding: 0;
            margin: auto;
            cursor: pointer;
        }

        .home-cover .owl-controls button.prev {
            left: 20px;
        }

        .home-cover .owl-controls button.next {
            right: 20px;
        }
    </style>

    <main id="main-content">
        <section class="home-cover">
            <div class="owl-carousel">
                <div class="item" style="background-image: url('{$path.uploads}Enmascarar grupo 34@2x.png');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">{$lang.idx_ss_01}</h4>
                        <h6 class="text"><span class="text-uppercase d-block">{$lang.idx_ss_02}</span> {$lang.idx_ss_03}</h6>
                        <figure class="logo-superpos m-0" style="position: absolute;bottom: 70px;right: 100px;width: 300px;">
                            <img src="{$path.uploads}arunazonatulum.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Selva Maya at harmony.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">{$lang.idx_ss_04}</h4>
                        <h6 class="text"><span class="text-uppercase d-block">{$lang.idx_ss_05}</span> {$lang.idx_ss_06}</h6>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Surenna.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">{$lang.idx_ss_07}</h4>
                        <h6 class="text"><span class="text-uppercase d-block">{$lang.idx_ss_08}</span> {$lang.idx_ss_09}</h6>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Tulum-895.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">{$lang.idx_ss_10}</h4>
                        <h6 class="text"><span class="text-uppercase d-block">{$lang.idx_ss_11}</span> {$lang.idx_ss_12}</h6>
                    </div>
                </div>
            </div>
            <div class="owl-controls">
                <button class="prev"><i class="ti-angle-left"></i></button>
                <button class="next"><i class="ti-angle-right"></i></button>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-end justify-content-center">
                        <h1 class="display-4 text-uppercase m-0 font-weight-bold">{$lang.idx_04}</h1>
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-start justify-content-center">
                        <figure class="m-0">
                            <img src="{$path.images}neoterre-icon.png" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 m-t-40 text-center">
                        <p class="text-muted font-20 m-b-30">{$lang.idx_05}</p>
                        <p class="text-muted font-20">{$lang.idx_06}</p>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 text-center">
                        <a href="javascript:void(0);" id="be_part_of_btn" class="btn btn-link m-tb-30">{$lang.read_more}</a>
                        <div id="be_part_of" class="d-none">
                            <p class="text-muted font-20 m-b-30">{$lang.idx_07}</p>
                            <p class="text-muted font-20 m-b-30">{$lang.idx_08}</p>
                            <p class="text-muted font-20 m-b-30">{$lang.idx_09}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 m-t-40 text-center">
                        <p class="text-muted font-20 m-b-30">{$lang.idx_10}</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="developments">
            <div class="row no-gutters">
                <div class="col-12 col-md-4">
                    <div class="thumb-property d-flex flex-column align-items-center justify-content-end">
                        <figure class="elm-stretched m-0">
                            <img src="{$path.uploads}Enmascarar grupo 20@2x.png" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">{$lang.houses}</h2>
                        <a href="/developments/casas" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumb-property d-flex flex-column align-items-center justify-content-end">
                        <figure class="elm-stretched m-0">
                            <img src="{$path.uploads}Enmascarar grupo 21.jpg" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">{$lang.lots}</h2>
                        <a href="/developments/lotes" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumb-property d-flex flex-column align-items-center justify-content-end">
                        <figure class="elm-stretched m-0">
                            <img src="{$path.uploads}Enmascarar grupo 19@2x.png" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">{$lang.departments}</h2>
                        <a href="/developments/condos" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="chooseus" class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase text-center m-b-30">{$lang.idx_11}</h1>

                <div class="grid-gray">
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-home.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_12}</h6>
                        <p>{$lang.idx_13}</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-stonk.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_14}</h6>
                        <p>{$lang.idx_15}</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-building.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_16}</h6>
                        <p>{$lang.idx_17}</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-sale.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_18}</h6>
                        <p>{$lang.idx_19}</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-write.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_20}</h6>
                        <p>{$lang.idx_21}</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-money.png" alt="" class="img-fluid">
                        </figure>
                        <h6>{$lang.idx_22}</h6>
                        <p>{$lang.idx_23}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-to-action p-tb-50" style="background-image: url('{$path.uploads}Enmascarar grupo 32@2x.png')">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                        <figure class="m-b-20">
                            <img src="{$path.uploads}surenna-logotype.png" alt="">
                        </figure>
                        <a href="javascript:void(0);" class="btn btn-light text-uppercase p-lr-50"><span class="font-weight-bold">{$lang.view_all}</span></a>
                    </div>
                    <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                        <h2 class="display-4 text-uppercase text-light">{$lang.idx_24}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase m-b-30">Lifestyle</h1>
            </div>

            <div class="row no-gutters">
                <?php $neo_blog_count = 0; ?>
                <?php foreach ( $blog as $key => $value ) : ?>
                    <?php $neo_blog_count = $neo_blog_count + 1; ?>
                    <?php if ($neo_blog_count <= 8) : ?>
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
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="text-center d-flex flex-column align-items-center justify-content-center p-tb-50">
                <a href="/lifestyle" class="btn btn-light text-uppercase p-lr-50"><span class="font-weight-bold">{$lang.view_all}</span></a>
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
