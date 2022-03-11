<?php
defined('_EXEC') or die;

// Owl Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/dist/owl.carousel.min.js']);

// Page
$this->dependencies->add(['js', '{$path.js}pages/index.js?v=1.0.0']);
?>

<div id="page">
    %{main-header}%

    <main id="main-content">
        <section class="p-tb-50">
            <div class="container">
                <div class="button-items">
                    <a href="/developments/casas" class="btn btn-link p-l-0">{$lang.houses}</a>
                    <a href="/developments/lotes" class="btn btn-link p-l-0" style="opacity: 0.5;">{$lang.lots}</a>
                    <a href="/developments/condos" class="btn btn-link p-l-0" style="opacity: 0.5;">{$lang.departments}</a>
                </div>
                <h1 class="text-uppercase m-t-30">{$lang.houses}</h1>
                <p class="text-muted m-b-50">{$lang.download_brochure_next_page}</p>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}SURENNA MODELO A (1).png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 119.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_26}</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>25</h2>
                                        <h6>{$lang.houses}</h6>
                                        <p>{$lang.dvl_27}</p>
                                        <p>{$lang.dvl_28}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_29}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/surenna" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-1" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>4</h2>
                                        <h6>{$lang.dvl_30}</h6>
                                        <p>{$lang.dvl_31}</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>2</h2>
                                        <h6>{$lang.dvl_32}</h6>
                                        <p>{$lang.dvl_33}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_34}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/sabella" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 22.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 126.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_35}</span>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Copia de Modelo b.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 203.png" alt="" style="max-width: 80%;">
                            </figure>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>3</h2>
                                        <h6>{$lang.dvl_36}</h6>
                                        <p>{$lang.dvl_37}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_38}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/neoterre-houses" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
</div>
