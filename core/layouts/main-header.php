<?php defined('_EXEC') or die; ?>
<header class="topbar">
    <div class="container d-flex align-items-center">
        <nav>
            <ul class="list-inline m-0 visible-desktop visible-desktop-large">
                <li class="list-inline-item">
                    <a href="javascript:void(0);" class="btn btn-link btn-light text-uppercase font-weight-600">Desarrollos</a>

                    <div class="dropdown">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <p class="m-0"><a href="/developments/casas" class="text-dark"><strong>Casas</strong></a></p>
                                        </div>
                                        <div class="col-9">
                                            <ul class="list-unstyled">
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/surenna" class="text-dark">Surenna</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/sabella" class="text-dark">Sabella</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/neoterre-houses" class="text-dark">Neoterre Houses</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <p class="m-0"><a href="/developments/lotes" class="text-dark"><strong>Lotes</strong></a></p>
                                        </div>
                                        <div class="col-9">
                                            <ul class="list-unstyled">
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/tulum-895" class="text-dark">Tulum 895</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/selva-maya-harmony" class="text-dark">Selva Maya at Harmony</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/el-canto" class="text-dark">El Canto</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/sicaru" class="text-dark">Sicarú</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <p class="m-0"><a href="/developments/condos" class="text-dark"><strong>Condos</strong></a></p>
                                        </div>
                                        <div class="col-9">
                                            <ul class="list-unstyled">
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/aruna" class="text-dark">Aruna</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/villagio" class="text-dark">Villagio</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/una-luna" class="text-dark">Una luna</a>
                                                </li>
                                                <li class="list-inline-item d-block">
                                                    <a href="/development/sukses" class="text-dark">Suksës</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item">
                    <a href="/#chooseus" class="btn btn-link btn-light text-uppercase font-weight-600">Elígenos</a>
                </li>
                <li class="list-inline-item">
                    <a href="/collaborate" class="btn btn-link btn-light text-uppercase font-weight-600">Brokers</a>
                </li>
            </ul>
        </nav>

        <figure id="logotype">
            <a href="/">
                <img src="{$path.images}logotype-white.png" alt="" class="img-fluid">
            </a>
        </figure>

        <nav>
            <ul class="list-inline m-0 visible-desktop visible-desktop-large">
                <li class="list-inline-item">
                    <a href="/lifestyle" class="btn btn-link btn-light text-uppercase font-weight-600">Lifestyle</a>
                </li>
                <li class="list-inline-item">
                    <a href="/contact" class="btn btn-light text-uppercase font-weight-600">Contacto</a>
                </li>
            </ul>
            <div class="visible-phone visible-tablet">
                <?= \Libraries\Functions::put_button_hamburger_menu() ?>
            </div>
        </nav>
    </div>
</header>
