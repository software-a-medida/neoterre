<?php
defined('_EXEC') or die;

// Owl Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/dist/owl.carousel.min.js']);

// Page
$this->dependencies->add(['js', '{$path.js}pages/development_view.js?v=1.0.0']);
?>

<div id="page">
    %{main-header}%

    <main id="main-content">
        <section class="p-tb-50">
            <div class="container">
                <div class="button-items">
                    <a href="javascript:void(0);" class="btn btn-link p-l-0">Volver</a>
                </div>
                <h1 class="text-uppercase m-t-30 font-weight-bold">Aruna</h1>

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="page-cover d-flex flex-column justify-content-center">
                            <figure class="m-0">
                                <img src="{$path.uploads}Enmascarar grupo 40.png" alt="" class="img-cover">
                            </figure>

                            <div class="col-12 col-md-6">
                                <h1 class="text-uppercase text-light m-b-40">Tu refugio rentable en el paraiso</h1>

                                <a href="{$path.uploads}Aruna_Brochure_español.pdf" download="Aruna_Brochure.pdf" class="btn btn-light text-uppercase font-weight-bold">Descargar brochure</a>
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
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">29 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Condos.</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-casas.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">4 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Tipologías.</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-plano.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;"><span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Desde 185.000 USD <br>48-176 m2</span></h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 class="text-uppercase m-b-30">Lo mejor del diseño contemporaneo en la zona de mayor crecimiento de Tulum</h2>
                        <p class="">El proyecto goza de una amplia gama de amenidades y servicios, como vigilancia las 24 horas, WiFi en áreas comunes, bike parking, pabellón de yoga, cabina de masajes, zona de hamacas, piscina, terraza común, entre otras. En régimen de condominio, listo para entregar y escrituar y apto para crédito hipotecario.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h1 class="text-uppercase m-b-20 font-weight-bold">Contáctanos</h1>
                        
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
                <h1 class="text-uppercase m-t-30 font-weight-bold">Galería</h1>

                <div class="gallery-carousel">
                    <div class="owl-carousel">
                        <?php
                        $arr_gallery = [
                            '02 - AEREA - ARUNA.jpg',
                            '02 - FACHADA LATERAL - ARUNA.jpg',
                            '02 - FACHADA PRINCIPAL - ARUNA (1).jpg',
                            '02 - ROOF DEPARTAMENTO A1 - ARUNA-01.jpg',
                            '02 - ROOF DEPARTAMENTO A1 - ARUNA-02.jpg',
                            '02 - ROOF DEPARTAMENTO A1 - ARUNA-03.jpg',
                            '02 - ROOF DEPARTAMENTO A1 - ARUNA-04.jpg',
                            '02 - ROOF DEPARTAMENTO A1 - ARUNA-05.jpg',
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
                <img src="{$path.uploads}Grupo de desplazamiento 12.png?v=1" alt="" class="img-cover">
            </figure>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <figure class="img-fluid m-0">
                            <img src="{$path.uploads}aruna-map.png" alt="" class="img-cover">
                        </figure>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                        <h1 class="text-uppercase m-b-30 font-weight-bold">Ubicación</h1>
                        <div class="status-bars">
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Playa</strong>
                                    <small>10 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Zona Arqueológica</strong>
                                    <small>10 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Av. Kukulcan</strong>
                                    <small>1 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 5%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Av. Tulum</strong>
                                    <small>1 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 5%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 m-t-30 offset-md-4 suffix-md-4">
                        <a href="{$path.uploads}Aruna_Brochure_español.pdf" download="Aruna_Brochure.pdf" class="btn btn-dark btn-block text-uppercase">Descargar brochure</a>
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
