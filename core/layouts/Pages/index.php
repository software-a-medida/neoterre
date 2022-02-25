<?php
defined('_EXEC') or die;

// Owl Carousel
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/dist/owl.carousel.min.js']);

// Page
$this->dependencies->add(['js', '{$path.js}pages/index.js?v=1.0.1']);
?>

<div id="page">
    %{main-header}%

    <style>
        .home-cover .owl-controls button {
            position: absolute;
            top: -120px;
            bottom: 0;
            color: #FFF;
            z-index: 1;
            border: none;
            background-color: transparent;
            font-size: 5rem;
            height: min-content;
            line-height: 1rem;
            padding: 0;
            margin: auto;
            cursor: pointer;
        }

        .home-cover .owl-controls button.prev {
            left: 20px;
        }

        .home-cover .owl-controls button.next {
            right: 20px;
        }
    </style>

    <main id="main-content">
        <section class="home-cover">
            <div class="owl-carousel">
                <div class="item" style="background-image: url('{$path.uploads}Enmascarar grupo 34@2x.png');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">ELEVAMOS ESTILOS DE VIDA</h4>
                        <h6 class="text"><span class="text-uppercase d-block">CONSTRUIMOS SUEÑOS</span> <small>Invierte exitosamente en desarrollos de Tulum.</small></h6>
                        <figure class="logo-superpos m-0" style="position: absolute;bottom: 70px;right: 100px;width: 300px;">
                            <img src="{$path.uploads}arunazonatulum.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Selva Maya at harmony.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">ELEVAMOS ESTILOS DE VIDA</h4>
                        <h6 class="text"><span class="text-uppercase d-block">CONSTRUIMOS SUEÑOS</span> <small>Invierte exitosamente en desarrollos de Tulum.</small></h6>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Surenna.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">ELEVAMOS ESTILOS DE VIDA</h4>
                        <h6 class="text"><span class="text-uppercase d-block">CONSTRUIMOS SUEÑOS</span> <small>Invierte exitosamente en desarrollos de Tulum.</small></h6>
                    </div>
                </div>
                <div class="item" style="background-image: url('{$path.uploads}Tulum-895.jpg');">
                    <div class="container" style="background-color: rgb(0 0 0 / 40%);padding: 30px;">
                        <h4 class="title">ELEVAMOS ESTILOS DE VIDA</h4>
                        <h6 class="text"><span class="text-uppercase d-block">CONSTRUIMOS SUEÑOS</span> <small>Invierte exitosamente en desarrollos de Tulum.</small></h6>
                    </div>
                </div>
            </div>
            <div class="owl-controls">
                <button class="prev"><i class="ti-angle-left"></i></button>
                <button class="next"><i class="ti-angle-right"></i></button>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-end justify-content-center">
                        <h1 class="display-4 text-uppercase m-0 font-weight-bold">Be part of</h1>
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-start justify-content-center">
                        <figure class="m-0">
                            <img src="{$path.images}neoterre-icon.png" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 m-t-40 text-center">
                        <p class="text-muted font-20 m-b-30">Descubre <strong>una ciudad inmersa en la selva</strong>, hogar de cientos de especies, bordeada por las costas turquesas y las <strong>playas paradisíacas</strong>, donde la innegable herencia de la <strong>cultura maya</strong> se hace presente en cada esquina.</p>
                        <p class="text-muted font-20"><strong>Tulum es el paraíso natural para conectarse con uno mismo</strong>, una ciudad bajo continuo crecimiento, planeada sustentablemente para proteger sus tesoros naturales.</p>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 text-center">
                        <a href="javascript:void(0);" id="be_part_of_btn" class="btn btn-link m-tb-30">Leer más</a>
                        <div id="be_part_of" class="d-none">
                            <p class="text-muted font-20 m-b-30"><strong>Recientemente se ha posicionado cómo el principal destino turístico del caribe mexicano</strong>, con una extensa oferta de actividades, gastronomía y vida nocturna para que todos disfruten.</p>
                            <p class="text-muted font-20 m-b-30"><strong>La expansión internacional de Tulum demanda más espacios habitables</strong> para viajeros de todo el mundo que consideran convertir este paraíso en su segundo hogar.</p>
                            <p class="text-muted font-20 m-b-30"><strong>Nuevos proyectos de infraestructura</strong> como el aeropuerto, Tren Maya, autopistas y desarrollos inmobiliarios <strong>prometen seguir aumentando la plusvalía para los inversores.</strong></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 suffix-md-2 m-t-40 text-center">
                        <p class="text-muted font-20 m-b-30"><strong>Invertir en Tulum es una decisión sabia.</strong></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="developments">
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
                            <img src="{$path.uploads}Enmascarar grupo 21.jpg" alt="" class="img-cover">
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

        <section id="chooseus" class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase text-center m-b-30">¿Por qué elegirnos?</h1>

                <div class="grid-gray">
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-home.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Amplio <br>portafolio</h6>
                        <p>de desarrollos de lujo.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-stonk.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Mayor <br>rentabilidad</h6>
                        <p>en inversiones de largo y corto plazo.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-building.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Mejor <br>ubicación</h6>
                        <p>y calidad de vida asegurada.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-sale.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Opciones flexible</h6>
                        <p>de financiamiento.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-write.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Estudio de mercado</h6>
                        <p>extensivo para tomar las mejores decisiones.</p>
                    </div>
                    <div>
                        <figure class="d-flex align-items-center flex-column justify-content-center m-b-10" style="width: 78px;height: 78px;">
                            <img src="{$path.images}icon-write.png" alt="" class="img-fluid">
                        </figure>
                        <h6>Mejores precios por m2</h6>
                        <p>justos y competitivos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-to-action p-tb-50" style="background-image: url('{$path.uploads}Enmascarar grupo 32@2x.png')">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                        <figure class="m-b-20">
                            <img src="{$path.uploads}surenna-logotype.png" alt="">
                        </figure>
                        <a href="javascript:void(0);" class="btn btn-light text-uppercase p-lr-50"><span class="font-weight-bold">Ver desarollo</span></a>
                    </div>
                    <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                        <h2 class="display-4 text-uppercase text-light">Una comunidad unifamiliar de lujo en Tulum</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-tb-50">
            <div class="container">
                <h1 class="text-uppercase m-b-30">Lifestyle</h1>
            </div>

            <div class="row no-gutters">
                <?php foreach ( $blog as $key => $value ): ?>
                    <div class="col-12 col-md-4">
                        <a href="/lifestyle/<?= $value['url'] ?>">
                            <div class="card" style="border: none;">
                                <img class="card-img-top img-fluid" src="{$path.uploads}<?= $value['image'] ?>" alt="">
                                <div class="card-body">
                                    <p class="card-text"><strong class="text-uppercase"><?= $value['title'] ?></strong></p>
                                    <p class="card-text text-muted">@neoterremx</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="suscribe" style="background-image: url('{$path.uploads}Enmascarar grupo 36@2x.png')">
            <div class="container">
                <h1>Suscríbete</h1>
                <h6>Y mantente al tanto de las últimas oportunidades <br>de inversión en Tulum.</h6>
                <form>
                    <input type="text" placeholder="Email" />
                    <button class="btn btn-dark text-uppercase font-weight-bold">Enviar</button>
                </form>
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
