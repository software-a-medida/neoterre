<?php defined('_EXEC') or die; ?>

<header class="main-header">
    <div class="topbar-navigation">
        <div class="container">
            <figure id="header-logotype" class="m-0">
                <a href="/"><img src="{$path.images}logotype.png" alt="{$vkye_webpage}" class="img-fluid"></a>
            </figure>
            <nav class="main-menu">
                <ul class="list-inline m-0 visible-desktop visible-desktop-large">
                    <li class="list-inline-item">
                        <a href="/" class="btn btn-link"><i class="fa fa-home"></i> {$lang.header_menu_1}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/desarrollador" class="btn btn-link">{$lang.header_menu_2}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" class="btn btn-link">{$lang.header_menu_3}</a>
                        <ul class="list-unstyled submenu">
                            <li class="list-group-item-action">
                                <a href="/productos/casas" class="btn btn-link btn-block text-left">{$lang.header_menu_3_2}</a>
                            </li>
                            <li class="list-group-item-action">
                                <a href="/productos/departamentos" class="btn btn-link btn-block text-left">{$lang.header_menu_3_3}</a>
                            </li>
                            <li class="list-group-item-action">
                                <a href="/productos/lotes" class="btn btn-link btn-block text-left">{$lang.header_menu_3_4}</a>
                            </li>
                            <li class="list-group-item-action">
                                <a href="/productos" class="btn btn-link btn-block text-left">{$lang.header_menu_3_1}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-inline-item">
                        <a href="/servicios" class="btn btn-link">{$lang.header_menu_4}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://neoterre.mx/blog" class="btn btn-link">{$lang.header_menu_5}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/faqs" class="btn btn-link">{$lang.header_menu_6}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/contacto" class="btn btn-link">{$lang.header_menu_7}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="?<?php echo Language::get_lang_url('es'); ?>" class="btn btn-link"><img src="{$path.images}es.png" alt="ES"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="?<?php echo Language::get_lang_url('en'); ?>" class="btn btn-link"><img src="{$path.images}en.png" alt="EN"></a>
                    </li>
                </ul>
                <ul class="list-inline m-0">
                    <li class="list-inline-item visible-phone visible-tablet">
                        <button id="trigger-nav-mobile" class="menu-wrapper">
                            <div class="hamburger-menu"></div>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<section class="mobile-menu visible-phone visible-tablet">
    <div class="container">
        <nav class="main-menu">
            <ul class="list-unstyled">
                <li><a href="/" class="btn btn-link">{$lang.header_menu_1}</a></li>
                <li><a href="/desarrollador" class="btn btn-link">{$lang.header_menu_2}</a></li>
                <li><a href="/productos" class="btn btn-link">{$lang.header_menu_3}</a></li>
                <li><a href="/servicios" class="btn btn-link">{$lang.header_menu_4}</a></li>
                <li><a href="https://neoterre.mx/blog" class="btn btn-link">{$lang.header_menu_5}</a></li>
                <li><a href="/faqs" class="btn btn-link">{$lang.header_menu_6}</a></li>
                <li><a href="/contacto" class="btn btn-link">{$lang.header_menu_7}</a></li>
            </ul>
        </nav>
    </div>
</section>
