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
                    <a href="/developments/lotes" class="btn btn-link p-l-0" style="opacity: 0.5;">Lotes</a>
                    <a href="/developments/condos" class="btn btn-link p-l-0">Condos</a>
                </div>
                <h1 class="text-uppercase m-t-30">Condos</h1>
                <p class="text-muted m-b-50">En la página del desarrollo recién esta la descarga del brochure.</p>

                <!-- <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}R001.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 212.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 20px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">Sept 2021.</span>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
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
                                </div>

                                <p class="text-muted">Surenna reúne lo mejor del <strong>diseño contemporaneo en una excelente ubicación</strong> con abundantes espacios naturales. Descubre un proyecto de lotificación único en su estilo, con <strong>hasta 3 modelos</strong> de casas para todos los gustos.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/sihil" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                    </div>
                </article> -->

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-1" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>29</h2>
                                        <h6>Condos</h6>
                                        <p>4 tipologías</p>
                                        <p>Desde 72.02 m2.</p>
                                        <p>a partir de 185.000 USD.</p>
                                    </div>
                                </div>

                                <p class="text-muted">29 amplios y luminosos departamentos que optimizan  el uso de luz natural para otorgar gran confort a sus usuarios. Aruna es ideal para ofrecer una renta vacacional de lujo a la gran demanda internacional de turistas.  En régimen de condominio, listo para entregar y escriturar y apto para crédito hipotecario.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/aruna" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 27.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 136.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 40px;right: -50px;z-index: 1;background-color: #000;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">83% vendido.</span>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 25.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 132.png" alt="" style="max-width: 80%;">
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

                                <p class="text-muted">Un exclusivo desarrollo en Aldea Zamá ideal para aquellos que desean hacer de Tulum su segundo hogar, ofreciendo gran privacidad y seguridad.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/villagio" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-1" style="padding: 20px;background-color: #F1F1F1;">
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

                                <p class="text-muted">Un proyecto ideal para aquellos que buscan rentabilidad en su inversión, por su excelente ubicación en Tulum que le garantiza una alta ocupación durante todo el año, teniendo en cuenta la gran demanda de viajeros de todo el mundo.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/una-luna" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 pos-relative noscroll">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}Enmascarar grupo 26.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Logo UNALUNA.png" alt="" style="max-width: 80%;">
                            </figure>
                            <span style="position: absolute;bottom: 20px;right: -50px;z-index: 1;background-color: #b5b5b5;padding: 10px 50px;color: #FFF;font-weight: bold;text-transform: uppercase;font-size: 1.3rem;transform: rotate(-45deg);">Sold out.</span>
                        </div>
                    </div>
                </article>

                <article class="m-b-50">
                    <div class="row no-gutters">
                        <div class="col-md-8 order-1 order-md-1">
                            <figure class="elm-stretched m-0">
                                <img src="{$path.uploads}d2560f1294988aec883febef0d1e7bb3.png" alt="" class="img-cover">
                            </figure>
                            <figure class="align-items-center d-flex elm-stretched flex-column justify-content-center m-0" style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;">
                                <img src="{$path.uploads}Grupo 213.png" alt="" style="max-width: 80%;">
                            </figure>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between order-2 order-md-2" style="padding: 20px;background-color: #F1F1F1;">
                            <div>
                                <div class="grid-gray m-b-20" style="grid-template-columns: repeat(2, 1fr);">
                                    <div class="p-0" style="background-color: transparent;">
                                        <h2>18</h2>
                                        <h6>Departamentos</h6>
                                        <p>3 tipologías.</p>
                                        <p>Desde 35.92 m2.</p>
                                        <p>a partir de 94.500 USD.</p>
                                    </div>
                                </div>

                                <p class="text-muted">Suksës es un exclusivo complejo residencial desarrollado en conjunto a Monific. Cuenta con 18 departamentos, distribuidos en 4 pisos y rooftop con alberca, en un total de 1,124 m2.</p>
                            </div>

                            <div class="button-items text-center m-t-20">
                                <a href="/development/sukses" class="btn btn-dark text-uppercase p-lr-50">Ver desarrollo</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
</div>
