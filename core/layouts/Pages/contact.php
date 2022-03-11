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
        <section class="p-tb-50" style="background-color: #f5f5f5;">
            <div class="container">
                <h1 class="text-uppercase m-b-30 font-weight-bold">{$lang.contact_us}</h1>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: "7235449",
                        formId: "85c4ab2b-8b9a-46dc-a84b-15a75e24ed47"
                    });
                </script>
            </div>
        </section>

        <section class="suscribe" style="background-image: url('{$path.uploads}Enmascarar grupo 36@2x.png')">
            <div class="container">
                <h1>{$lang.suscribe}</h1>
                <h6>{$lang.idx_25}</h6>
                <form>
                    <input type="text" placeholder="Email" />
                    <button class="btn btn-dark text-uppercase font-weight-bold">{$lang.send}</button>
                </form>
            </div>
        </section>
    </main>
</div>
