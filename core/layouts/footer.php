<?php defined('_EXEC') or die; ?>
        <footer class="main-footer">
            <div class="container">
                <div class="row no-gutters p-b-50">
                    <div class="col-11 d-flex flex-column justify-content-center">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item m-r-50">
                                <a href="/developing" class="btn btn-link" style="font-weight: 400;">Desarrollo</a>
                            </li>
                            <li class="list-inline-item m-r-50">
                                <a href="/collaborate" class="btn btn-link" style="font-weight: 400;">Elígenos</a>
                            </li>
                            <li class="list-inline-item m-r-50">
                                <a href="javascript:void(0);" class="btn btn-link" style="font-weight: 400;">Brokers</a>
                            </li>
                            <li class="list-inline-item m-r-50">
                                <a href="/lifestyle" class="btn btn-link" style="font-weight: 400;">Lifestyle</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/contact" class="btn btn-link" style="font-weight: 400;">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1 text-right">
                        <a href="https://www.facebook.com/NeoterreLifestyleDevelopers/" target="_blank" class="btn btn-link p-lr-5" style="font-size: 2rem;"> <i class="fa fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/neoterremx/" target="_blank" class="btn btn-link p-lr-5" style="font-size: 2rem;"> <i class="fa fa-instagram"></i> </a>
                    </div>
                </div>

                <p class="text-dark font-16 font-weight-normal m-0">info@neoterre.mx</p>
                <p class="text-dark font-16 font-weight-normal m-0">+521(984)1284265</p>
                <p class="text-dark font-16 font-weight-normal m-0">+521(984)2387572</p>

                <div class="row no-gutters p-tb-50">
                    <div class="col-11 d-flex flex-column justify-content-center">
                        <p class="m-0"><small><strong>© <?= date('Y') ?> Neoterre</strong></small></p>
                        <p class="m-0"><small><strong>Designed by Kuro & development <i class="mdi mdi-heart text-danger"></i> by <a href="https://codemonkey.com.mx" target="_blank">codemonkey.com.mx</a></strong></small></p>
                    </div>
                    <div class="col-1 text-right">
                        <figure class="img-fluid m-0 p-l-10" style="display: -webkit-box;display: flex;flex-direction: column;align-items: center;justify-content: center;height: 100%;width: 100%;">
                            <img src="{$path.images}Grupo 200@2x.png" alt="" style="display: block;width: 50px;">
                        </figure>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="{$path.js}valkyrie.js?v=1.0"></script>
        <script src="{$path.js}codemonkey-1.2.0.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        {$dependencies.js}

        {$dependencies.other}
    </body>
</html>
