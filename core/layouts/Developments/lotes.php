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
                    <a href="/developments/casas" class="btn btn-link p-l-0" style="opacity: 0.5;">{$lang.houses}</a>
                    <a href="/developments/lotes" class="btn btn-link p-l-0">{$lang.lots}</a>
                    <a href="/developments/condos" class="btn btn-link p-l-0" style="opacity: 0.5;">{$lang-departments}</a>
                </div>
                <h1 class="text-uppercase m-t-30">{$lang.lots}</h1>
                <p class="text-muted m-b-50">{$lang.download_brochure_next_page}</p>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 28.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Holistika hand.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_51}</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>30</h2>
                                        <h6>{$lang.lots}</h6>
                                        <p>{$lang.dvl_52}</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>26</h2>
                                        <h6>{$lang.dvl_53}</h6>
                                        <p>{$lang.dvl_54}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_55}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/tulum-895" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
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
                                        <h2>46</h2>
                                        <h6>{$lang.lots}</h6>
                                        <p>{$lang.dvl_55}</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>37</h2>
                                        <h6>{$lang.dvl_53}</h6>
                                        <p>{$lang.dvl_57}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_58}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/selva-maya-harmony" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}vickholius-nugroho-jt6QxZwSOCQ-unsplash.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 317.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_59}</span>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 29.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 139.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 20px;right: -50px;z-index: 1;background-color: #b5b5b5;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_44}</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <!-- <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>24</h2>
                                        <h6>{$lang.houses}</h6>
                                        <p>A partir de <br> 3,800,000 MXN.</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>34</h2>
                                        <h6>{$lang.lots}</h6>
                                        <p>A partir de <br> 975,000 MXN.</p>
                                    </div>
                                </div> -->

                                <p class="text-muted">{$lang.dvl_60}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/el-canto" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
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
                                        <h2>1</h2>
                                        <h6>{$lang.lots}</h6>
                                        <p>{$lang.dvl_61}</p>
                                    </div>
                                </div>

                                <p class="text-muted">{$lang.dvl_62}</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/sicaru" class="btn btn-dark text-uppercase p-lr-50">{$lang.view_all}</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 30.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 141.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">{$lang.dvl_63}</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
</div>
