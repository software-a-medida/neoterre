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
        <section class="page-header align-items-center d-flex flex-column justify-content-center">
            <figure>
                <img src="{$path.uploads}Enmascarar grupo 36@2x.png" alt="" class="img-cover">
            </figure>

            <div class="container">
                <h1 class="text__h text-center m-0 text-light m-b-40">{$lang.dvl_01}</h1>
                <h4>{$lang.dvl_02}</h4>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <p class="text-muted text-center font-20">{$lang.dvl_03}</p>
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

        <style>
            div.label label.checkbox, div.label label.radio {
                padding-left: 25px;
                display: block !important;
            }

            div.label label.checkbox .checkbox_indicator, div.label label.radio .radio_indicator {
                height: 20px;
                width: 20px;
                background-color: #d3d3d3;
            }
        </style>

        <section class="p-tb-50 m-t-30" style="background-color: #f5f5f5;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="text-uppercase m-b-30">{$lang.dvl_04}</h3>
                        <div class="label group-labels">
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_05}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_06}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_07}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_08}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="text-uppercase m-b-30">{$lang.dvl_09}</h3>
                        <div class="label group-labels">
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_10}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_11}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_12}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">{$lang.dvl_13}</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
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

                <p class="text-muted text-center font-20 m-t-30">{$lang.dvl_14}</p>
            </div>
        </section>

        <section class="call-to-action p-tb-50" style="background-image: url('{$path.uploads}Enmascarar grupo 32@2x.png')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left d-flex flex-column align-items-start justify-content-center">
                        <h2 class="display-4 text-uppercase text-light">{$lang.idx_10}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase text-center m-b-30">{$lang.dvl_15}</h1>

                <div class="p-20 m-b-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0">{$lang.dvl_16}</p>
                </div>
                <div class="p-20 m-b-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0">{$lang.dvl_17}</p>
                </div>
                <div class="p-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0">{$lang.dvl_18}</p>
                </div>
            </div>
        </section>

        <section>
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
                            <img src="{$path.uploads}Enmascarar grupo 21@2x.png" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">{$lang,lots}</h2>
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

        <section class="p-tb-50">
            <div class="container">
                <p class="text-muted text-center font-20">{$lang.dvl_19}</p>
            </div>
        </section>
    </main>
</div>
