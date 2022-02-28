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
                    <a href="/developments/casas" class="btn btn-link p-l-0" style="opacity: 0.5;">Casas</a>
                    <a href="/developments/lotes" class="btn btn-link p-l-0">Lotes</a>
                    <a href="/developments/condos" class="btn btn-link p-l-0" style="opacity: 0.5;">Condos</a>
                </div>
                <h1 class="text-uppercase m-t-30">Lotes</h1>
                <p class="text-muted m-b-50"><i>En la página del desarrollo recién esta la descarga del brochure.</i></p>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 28.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Holistika hand.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">53% vendido.</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>30</h2>
                                        <h6>Lotes</h6>
                                        <p>A partir de <br> 70,622 USD.</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>26</h2>
                                        <h6>Privados</h6>
                                        <p>Desde <br> 243.56 m2.</p>
                                    </div>
                                </div>

                                <p class="text-muted">Tulum 895 materializa la sensación única de vivir en una de las pocas privadas de Tulum, rodeado de la magnitud de la selva Maya y en la exclusividad de Holístika, a precios difíciles de encontrar en otros desarrollos similares de la zona.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/tulum-895" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
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
                                        <h6>Lotes</h6>
                                        <p>A partir de <br> 93,600 USD.</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>37</h2>
                                        <h6>Privados</h6>
                                        <p>Desde <br> 300 m2</p>
                                    </div>
                                </div>

                                <p class="text-muted">Este proyecto replica la exitosa propuesta de Tulum 895, con mayor cantidad de lotes en hasta 3 privadas residenciales para ofrecer un estilo de vida privilegiado en la Riviera Maya.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/selva-maya-harmony" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}vickholius-nugroho-jt6QxZwSOCQ-unsplash.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 317.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">9% vendido.</span>
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
                            <span style="position: absolute;bottom: 20px;right: -50px;z-index: 1;background-color: #b5b5b5;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">Sold out.</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <!-- <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>24</h2>
                                        <h6>Casas</h6>
                                        <p>A partir de <br> 3,800,000 MXN.</p>
                                    </div>
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>34</h2>
                                        <h6>Lotes</h6>
                                        <p>A partir de <br> 975,000 MXN.</p>
                                    </div>
                                </div> -->

                                <p class="text-muted">36 lotes residenciales con áreas verdes abundantes en medio de la jungla. El proyecto cuenta con una excelente ubicación en la región 15, una de las zonas de mayor crecimiento en Tulum.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/el-canto" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
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
                                        <h6>Lote</h6>
                                        <p>260 USD por m2</p>
                                    </div>
                                </div>

                                <p class="text-muted">En el corazón de La Veleta se encuentra sin duda nuestra mejor opción para todo aquel que desee construir su propio proyecto inmobiliario en Tulum. Su ubicación, densidad , conectividad y servicios le dan muchísimas ventajas competitivas.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/sicaru" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 30.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 141.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">Último lote.</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
</div>
