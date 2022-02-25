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
                <h1 class="text-uppercase m-t-30 font-weight-bold">Suksës</h1>

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="page-cover d-flex flex-column justify-content-center">
                            <figure class="m-0">
                                <img src="{$path.uploads}d2560f1294988aec883febef0d1e7bb3.png" alt="" class="img-cover">
                            </figure>

                            <div class="col-12 col-md-6">
                                <h1 class="text-uppercase text-light m-b-40">Departamentos de ensueño en Tulum centro</h1>

                                <a href="{$path.uploads}Sukses_Brochure_inglés.pdf" download="Sukses_Brochure.pdf" class="btn btn-light text-uppercase font-weight-bold">Descargar brochure</a>
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
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">18 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Departamentos.</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-casas.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;">3 <span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Tipologías.</span></h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <figure class="thumb-md d-flex align-items-center flex-column justify-content-center m-0">
                            <img src="{$path.images}icon-plano.png" alt="" class="img-fluid">
                        </figure>
                        <h5 class="d-flex m-0 m-l-10" style="font-size: 2.5rem;"><span class="d-flex flex-column justify-content-center m-l-10" style="font-size: 1.3rem;">Desde 94.500 USD <br>35.92 - 85.58 m2</span></h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 class="text-uppercase m-b-30">Respira Tulum en cada espacio</h2>
                        <p class="">El desarrollo goza de una ubicación privilegiada a tan solo 1 cuadra de la principal avenida de Tulum, una zona repleta de comercios. Quienes residan en Suksës, se beneficiarán de contar con seguridad 24/7, acceso controlado, wifi en áreas comunes, multiples espacios verdes, estacionamiento para bicicletas y acceso exclusivo a clubes de playa asociados.</p>
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
                            '2aa681da-6871-4745-aadc-5cb4cb2abe03.jpg',
                            '6c8bd2f4-e752-43c4-a33d-85100bca13fe.jpg',
                            '6c193d68-4e5e-4d59-b5e0-84a8a7f5178e.jpg',
                            '6e578b8e-f656-4432-a45d-03d97149a685.jpg',
                            '9a816d05-e72a-4898-a88f-954a2d3823ca.jpg',
                            '36e20ce3-46d9-4e55-8457-35610412b91d.jpg',
                            '69dc215f-ad44-4bd5-9c8f-f3651d6c5bdf.jpg',
                            '75fe8e38-0b6e-41a4-852a-fe6503714e7c.jpg',
                            '191d8c09-2ef0-4537-bab9-461565a1562a.jpg',
                            '452d1de7-6508-4964-8d68-5bf86cf46af4.jpg',
                            '56980773-3e60-412f-9e4c-bf8a6835c5ac.jpg',
                            'de03c5d7-2f9c-4076-ba36-98c185b9d3b7.jpg',
                            'f433e40e-a3f5-4812-9af4-b5970f377083.jpg',
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
                            <img src="{$path.uploads}sukses-map.png" alt="" class="img-cover">
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
                                    <small>5 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 15%;"></div>
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
                            <div class="item m-b-20">
                                <p class="align-items-center d-flex justify-content-between">
                                    <strong>Av. Coba</strong>
                                    <small>1 min</small>
                                </p>
                                <div class="bar">
                                    <div style="width: 5%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 m-t-30 offset-md-4 suffix-md-4">
                        <a href="{$path.uploads}Sukses_Brochure_inglés.pdf" download="Sukses_Brochure.pdf" class="btn btn-dark btn-block text-uppercase">Descargar brochure</a>
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
