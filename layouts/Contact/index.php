<?php defined('_EXEC') or die; ?>

<div id="page">
    %{main_header}%
    <main id="main-content">
        <header class="breadcrumbs m-b-50">
            <div class="container">
                <h3 class="title m-b-0">{$lang.contact_title}</h3>
            </div>
        </header>
        <section class="p-t-50">
            <div class="container">
                <div class="row p-t-50">
                    <div class="col-md-4 contact-data">
                        <div class="row">
                            <div class="col-3 d-flex flex-column align-items-center">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="col-9 d-flex flex-column">
                                <h5>{$lang.contact_phone}</h5>
                                <p class="text-muted m-0">+ (52) 984 238 75 72</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 contact-data">
                        <div class="row">
                            <div class="col-3 d-flex flex-column align-items-center">
                                <i class="fa fa-map-pin"></i>
                            </div>
                            <div class="col-9 d-flex flex-column">
                                <h5>{$lang.contact_address}</h5>
                                <p class="text-muted m-0">Av. Cobá, Mza 9, Lote 1, <br>Tulum, Q. Roo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 contact-data">
                        <div class="row">
                            <div class="col-3 d-flex flex-column align-items-center">
                                <i class="fa fa-envelope-open-o"></i>
                            </div>
                            <div class="col-9 d-flex flex-column">
                                <h5>{$lang.contact_email}</h5>
                                <p class="text-muted m-0">info@neoterre.mx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    %{main_footer}%
</div>
