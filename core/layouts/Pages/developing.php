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
                <h1 class="text__h text-center m-0 text-light m-b-40">Neoterre: Developing <br>lifestyle, building dreams</h1>
                <h4>Invierte existosamente en desarrollos de Tulum</h4>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <p class="text-muted text-center font-20">Con Neoterre puedes invertir tu patrimonio en un <strong>mercado estable.</strong> Conoce nuestro <strong>amplio portafolio de desarrollos</strong> que reflejan lo mejor del mercado inmobiliario en Tulum. Tenemos <strong>opciones rentables</strong> para presupuestos bajos, medianos o altos, según tu preferencia.</p>
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
                        <h3 class="text-uppercase m-b-30"><strong>¿Qué tipo de inversión <br>planeas hacer?</strong></h3>
                        <div class="label group-labels">
                            <label class="checkbox m-b-10">
                                <p class="m-0">1. De plusvalía</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">2. Renta vacacional</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">3. Segundo hogar</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">4. Otra ¿Cuál? (especificar)</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="text-uppercase m-b-30"><strong>¿Cuánto deseas <br>invertir?</strong></h3>
                        <div class="label group-labels">
                            <label class="checkbox m-b-10">
                                <p class="m-0">Entre 100,000 y 200,000 USD</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">Entre 200,000 y 300,000 USD</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">Entre 300,000 y 400,000 USD</p>
                                <input type="checkbox"/>
                                <div class="checkbox_indicator"></div>
                            </label>
                            <label class="checkbox m-b-10">
                                <p class="m-0">Más de 500,000 USD</p>
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
                <h1 class="text-uppercase text-center m-b-30">¿Por qué elegirnos?</h1>

                <div class="grid-gray">
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-home.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Amplio <br>portafolio</h6>
                        <p>De desarrollos de lujo.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-stonk.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Mayor <br>rentabilidad</h6>
                        <p>En inversiones de largo y corto plazo.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-building.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Mejor <br>ubicación</h6>
                        <p>Y calidad de vida asegurada.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-sale.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Financiamiento flexible</h6>
                        <p>y opciones.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-write.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Extensivo estudio</h6>
                        <p>de mercado.</p>
                    </div>
                </div>

                <p class="text-muted text-center font-20 m-t-30">Somos <strong>expertos en desarrollos inmobiliarios.</strong> Desde hace <strong>más de 15 años,</strong> trabajamos para garantizar proyectos con la <strong>mejor ubicación</strong> y la <strong>mayor rentabilidad de inversión</strong> a corto y largo plazo, siempre satisfaciendo los gustos y preferencias del mercado.</p>
            </div>
        </section>

        <section class="call-to-action p-tb-50" style="background-image: url('{$path.uploads}Enmascarar grupo 32@2x.png')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left d-flex flex-column align-items-start justify-content-center">
                        <h2 class="display-4 text-uppercase text-light">Invertir en Tulum <br>es una decision sabia</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase text-center m-b-30">¿Por qué Tulum?</h1>

                <div class="p-20 m-b-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0"><strong>Tulum se convirtió en el principal destino turístico de México;</strong> un paraíso natural bajo continuo crecimiento, planeado con un foco de sustentabilidad para proteger sus playas, selvas, ruinas y tesoros naturales.</p>
                </div>
                <div class="p-20 m-b-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0">Su <strong>extensa oferta de actividades,</strong> gastronomía y vida nocturna captó la atención de <strong>viajeros de todo el mundo,</strong> lo cual demandará más espacios y desarrollos para habitar.</p>
                </div>
                <div class="p-20" style="background-color: #f5f5f5;">
                    <p class="text-muted text-center font-16 m-0"><strong>Nuevos proyectos de infraestructura</strong> como el aeropuerto local, tren Maya, autopistas y desarrollos inmobiliarios <strong>prometen seguir aumentando la plusvalía para inversores.</strong></p>
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
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">Casas</h2>
                        <a href="/developments/casas" class="btn btn-dark text-uppercase p-lr-50">Ver casas</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumb-property d-flex flex-column align-items-center justify-content-end">
                        <figure class="elm-stretched m-0">
                            <img src="{$path.uploads}Enmascarar grupo 21@2x.png" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">Lotes</h2>
                        <a href="/developments/lotes" class="btn btn-dark text-uppercase p-lr-50">Ver lotes</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumb-property d-flex flex-column align-items-center justify-content-end">
                        <figure class="elm-stretched m-0">
                            <img src="{$path.uploads}Enmascarar grupo 19@2x.png" alt="" class="img-cover">
                        </figure>
                        <h2 class="display-4 font-weight-bold text-uppercase m-b-30 text-light">Condos</h2>
                        <a href="/developments/condos" class="btn btn-dark text-uppercase p-lr-50">Ver condos</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <p class="text-muted text-center font-20">Contamos con productos para todos los gustos; Elige entre departamentos ideales para rentas vacacionales, casas para disfrutar Tulum al máximo, o lotes para contruir el proyecto de tus sueños.</p>
            </div>
        </section>
    </main>
</div>
