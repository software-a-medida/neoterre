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
                <img src="{$path.uploads}Enmascarar grupo 15@2x.png" alt="" class="img-cover">
            </figure>

            <div class="container">
                <h1 class="text__h text-center m-0 text-light m-b-40">Colaboremos juntos</h1>
                <h4>y aumentemos la plusvalía de Tulum con <br>desarrollos inmobiliarios de calidad.</h4>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="grid-gray">
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-porcentaje.png" alt="" class="img-fluid">
                        </figure>
                        <h6>6% de comisión + i.v.a.</h6>
                        <p>en todos nuestros desarrollos.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-24hrs.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Atención inmediata</h6>
                        <p>y personalizada las 24 horas.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-housecost.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Apoyo en la venta</h6>
                        <p>y cierre de operaciones.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-experiencia.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Experiencia en Tulum</h6>
                        <p>conocemos cada rincón de este paraíso.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-start.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Somos una constructora profesional</h6>
                        <p>con los mejores contactos de la zona.</p>
                    </div>
                </div>
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