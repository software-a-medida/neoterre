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
                <h1 class="text-uppercase m-t-30 font-weight-bold">Sihil</h1>

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="page-cover d-flex flex-column justify-content-center">
                            <figure class="m-0">
                                <img src="{$path.uploads}R001.png" alt="" class="img-cover">
                            </figure>

                            <div class="col-12 col-md-6">
                                <h1 class="text-uppercase text-light m-b-40">Inversión sustentable y segura en Tulum.</h1>

                                <a href="{$path.uploads}Sihil_Brochure_español.pdf" download="Sihil_Brochure_español.pdf" class="btn btn-light text-uppercase font-weight-bold">Descargar brochure</a>
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
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">12 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Condos</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-casas.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">4 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Tipologías</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-plano.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;"><span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Desde 53,18m2 <br>y 113.8 m2</span></h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 class="text-uppercase m-b-30">Tu hogar de bienvenida en Tulum</h2>
                        <p class="">Entre algunas de sus caracteristicas, se destacan los espacios iluminados y ventilados naturalmente, las alturas generosas para mayor amplitud, predominancia de plantas y árboles en cada espacio, ecosistemas íntimos con patíos interiores y vistas inigualables a las copas de los árboles.</p>
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
                            'AM001.jpg',
                            'BROCHURE SIHIL TULUM V3.jpg',
                            'ESTANCIADEPATIPO1PB.jpg',
                            'R001.jpg',
                            'R002.jpg',
                            'RECAMARA DEPA PRIMER NIVEL.jpg',
                            'RECAMARA DEPAS SEGUNDO NIVEL.jpg',
                            'RECAMARADEPATIPO1PB.jpg',
                            'SALA COMEDOR DEPA ORIOLE.jpg',
                            'SALA COMEDOR DEPA TURPIAL .jpg',
                            'SALACOMEDOR-DEPA PRIMER NIVEL.jpg',
                            'TERRAZA DEPA PLANTA BAJA.jpg',
                            'TERRAZA DEPA SEGUNDO NIVEL ESQUINA.jpg',
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
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <figure class="img-fluid m-0">
                            <img src="{$path.uploads}sihil-map.png" alt="" class="img-cover">
                        </figure>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                        <h1 class="text-uppercase m-b-30 font-weight-bold">Ubicación</h1>
                        <div class="status-bars">
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Centro de Tulum</strong>
                                    <small>2 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 5%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Playa</strong>
                                    <small>10 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Zona Arqueológica</strong>
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
                        <a href="{$path.uploads}Sihil_Brochure_español.pdf" download="Sihil_Brochure_español.pdf" class="btn btn-dark btn-block text-uppercase">Descargar brochure</a>
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
