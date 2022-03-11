<?php
defined('_EXEC') or die;

// Owl Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/dist/owl.carousel.min.js']);

// Page
$this->dependencies->add(['js', '{$path.js}pages/development_view.js?v=1.0.1']);
?>

<div id="page">
    %{main-header}%

    <main id="main-content">
        <section class="p-tb-50">
            <div class="container">
                <div class="button-items">
                    <a href="javascript:void(0);" class="btn btn-link p-l-0">{$lang.back}</a>
                </div>
                <h1 class="text-uppercase m-t-30 font-weight-bold">Surenna</h1>

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="page-cover d-flex flex-column justify-content-center">
                            <figure class="m-0">
                                <img src="{$path.uploads}Enmascarar grupo 35.png" alt="" class="img-cover">
                            </figure>

                            <div class="col-12 col-md-6">
                                <h1 class="text-uppercase text-light m-b-40">{$lang.dvl_101}</h1>

                                <a href="{$path.uploads}Surenna_Brochure_español.pdf" download="Surenna_Brochure_español.pdf" class="btn btn-light text-uppercase font-weight-bold">{$lang.download_brochure}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50" style="background-color: #f5f5f5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-casas.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">{$lang.dvl_102}</h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-casas.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">{$lang.dvl_103}</h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-plano.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">{$lang.dvl_104}</h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 class="text-uppercase m-b-30">{$lang.dvl_105}</h2>
                        <p class="">{$lang.dvl_106}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h1 class="text-uppercase m-b-20 font-weight-bold">{$lang.contact_us}</h1>

                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                        <script>
                            hbspt.forms.create({
                                portalId: "7235449",
                                formId: "85c4ab2b-8b9a-46dc-a84b-15a75e24ed47"
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase m-t-30 font-weight-bold">{$lang.gallery}</h1>

                <div class="gallery-carousel">
                    <div class="owl-carousel">
                        <?php
                        $arr_gallery = [
                            'SURENA PISCINA Y PATIO.jpg',
                            'SURENNA CONJUNTO .jpg',
                            'SURENNA MODELO A .jpg',
                            'SURENNA MODELO B.jpg',
                            'SURENNA TERRAZA.jpg',
                            'SURENNA VISTA AÉREA CONJUNTO 2.jpg',
                            'SURENNA_RENDER_INTERIOR_B_RECÁMARA (2).jpeg',
                            'SURENNA_RENDER_RECÁMARA_ABC.jpeg',
                        ];
                        ?>
                        <?php foreach ($arr_gallery as $key => $value): ?>
                            <div class="item">
                                <figure class="img-fluid m-0">
                                    <img src="{$path.uploads}<?= $value ?>" alt="" class="img-cover">
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="owl-controls">
                        <button class="prev"><i class="fa fa-angle-left"></i></button>
                        <button class="next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <figure class="img-fluid m-0">
                <img src="{$path.uploads}SURENNA_360_ESTANCIA.png?v=2" alt="" class="img-cover">
            </figure>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <figure class="img-fluid m-0">
                            <img src="{$path.uploads}surenna-map.png" alt="" class="img-cover">
                        </figure>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                        <h1 class="text-uppercase m-b-30 font-weight-bold">{$lang.location}</h1>
                        <div class="status-bars">
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>{$lang.tulum_center}</strong>
                                    <small>2 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 5%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>{$lang.beach}</strong>
                                    <small>10 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>{$lang.arq_zone}</strong>
                                    <small>10 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Playa del Carmen</strong>
                                    <small>50 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 m-t-30 offset-md-4 suffix-md-4">
                        <a href="{$path.uploads}Surenna_Brochure_español.pdf" download="Surenna_Brochure_español.pdf" class="btn btn-dark btn-block text-uppercase">{$lang.download_brochure}</a>
                    </div>
                </div>
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
