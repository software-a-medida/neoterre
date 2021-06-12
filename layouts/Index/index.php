<?php

defined('_EXEC') or die;

// OWL Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/owl.carousel.min.js']);

// Map
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

// Page
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.1']);

?>

<div id="page">
    %{main_header}%
    <main id="main-content">
        <!-- SEO -->
        <h1 style="display:none;">Neoterre, Tulúm lifestyle developers</h1>
        <h2 style="display:none;">Neoterre, Tulúm lifestyle developers</h2>
        <h3 style="display:none;">Neoterre, Tulúm lifestyle developers</h3>
        <h4 style="display:none;">Neoterre, Tulúm lifestyle developers</h4>
        <h4 style="display:none;">Neoterre, Tulúm lifestyle developers</h4>
        <h5 style="display:none;">Neoterre, Tulúm lifestyle developers</h5>
        <!--  -->
        <section class="homepage_slideshow owl-carousel owl-theme m-b-50">
            <div class="item" style="background-image: url('{$path.images}sabella_cover.png')">
                <div class="container">
                    <figure class="figure-img proyect_logotype">
                        <img src="{$path.images}sabella-logotype.png" alt="Sabella" class="img-fluid">
                    </figure>
                    <h4 class="title">{$lang.slideshow_homepage_1}</h4>
                    <a href="https://sabella.mx" class="btn btn-dark btn-lg" target="_blank">{$lang.btn_view_proyect}</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{$path.images}surenna_cover.png')">
                <div class="container">
                    <figure class="figure-img proyect_logotype">
                        <img src="{$path.images}surenna-logotype.png" alt="Surenna" class="img-fluid">
                    </figure>
                    <h4 class="title">{$lang.slideshow_homepage_2}</h4>
                    <a href="https://surenna.mx" class="btn btn-dark btn-lg" target="_blank">{$lang.btn_view_proyect}</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{$path.images}unaluna_cover.png')">
                <div class="container">
                    <figure class="figure-img proyect_logotype">
                        <img src="{$path.images}unaluna-logotype.png" alt="Una Luna" class="img-fluid">
                    </figure>
                    <h4 class="title">{$lang.slideshow_homepage_3}</h4>
                    <a href="https://unaluna.mx" class="btn btn-dark btn-lg" target="_blank">{$lang.btn_view_proyect}</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{$path.images}lots_cover.png')">
                <div class="container">
                    <h4 class="title">{$lang.slideshow_homepage_4}</h4>
                    <a href="/productos/lotes" class="btn btn-dark btn-lg">{$lang.btn_view_proyect}</a>
                </div>
            </div>
        </section>
        <section class="p-t-50 p-b-50">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title">{$lang.title_about_us}</h1>
                </div>
                <div class="about_us">
                    <figure>
                        <img src="{$path.images}logotype.png" alt="About us">
                    </figure>
                    <p>{$lang.text_about_us_1}</p>
                    <p>{$lang.text_about_us_2}</p>
                    <a href="/contacto">{$lang.more_information}</a>
                </div>
            </div>
        </section>
        <section class="call-to-action m-t-50 m-b-50" style="background-image: url('{$path.images}dreams.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex flex-column justify-content-center">
                        <div class="row m-t-40 m-b-20">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-2 col-md-3 offset-1 offset-md-0">
                                        <i class="icon-my-house text-white" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-white font-weight-bold">{$lang.text_about_us_3}</h6>
                                        <p class="text-white font-weight-600">{$lang.text_about_us_4}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-2 col-md-3 offset-1 offset-md-0">
                                        <i class="icon-pig-money-safe text-white" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-white font-weight-bold">{$lang.text_about_us_5}</h6>
                                        <p class="text-white font-weight-600">{$lang.text_about_us_6}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <h5 class="title">{$lang.subtitle_about_us}</h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-50 p-b-50">
            <div class="container">
                <div class="row p-b-50 products_shortcuts">
                    <div class="col-lg-6 m-b-20">
                        <figure class="outline-border figure-stretch m-0">
                            <div>
                                <img src="{$path.images}sabella_desarrollo.png" alt="Sabella" class="figure-stretch">
                            </div>
                            <a href="https://sabella.mx" target="_blank"></a>
                        </figure>
                    </div>
                    <div class="col-lg-6 m-b-20">
                        <figure class="outline-border figure-stretch m-0">
                            <div>
                                <img src="{$path.images}surenna_desarrollo.png" alt="Surenna" class="figure-stretch">
                            </div>
                            <a href="https://surenna.mx" target="_blank"></a>
                        </figure>
                    </div>
                    <div class="col-lg-6 m-b-20">
                        <figure class="outline-border figure-stretch m-0">
                            <div>
                                <img src="{$path.images}unaluna_desarrollo.png" alt="Una Luna" class="figure-stretch">
                            </div>
                            <a href="https://unaluna.mx" target="_blank"></a>
                        </figure>
                    </div>
                    <div class="col-lg-6 m-b-20">
                        <figure class="outline-border figure-stretch m-0">
                            <div>
                                <img src="{$path.images}lots_cover.png" alt="Lotes" class="figure-stretch">
                            </div>
                            <a href="/productos/lotes">{$lang.lots}</a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-to-action low m-t-50" style="background-image: url('{$path.images}tulum_cover.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <h5 class="title">{$lang.call_to_action_title}</h5>
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-center">
                        <p class="text-white style-neoterre">{$lang.call_to_action_text_1}</p>
                        <p class="text-white style-neoterre">{$lang.call_to_action_text_2}</p>
                        <p class="text-white style-neoterre m-0">{$lang.call_to_action_text_3}</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="map"></section>
    </main>
    %{main_footer}%
</div>
