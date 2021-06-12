<?php defined('_EXEC') or die; ?>

<div id="page">
    %{main_header}%
    <main id="main-content">
        <header class="breadcrumbs m-b-50">
            <div class="container">
                <h3 class="title m-b-0">{$lang.faqs_title}</h3>
            </div>
        </header>
        <section class="p-t-50">
            <div class="container">
                <section class="toggles m-b-50">
                    <section class="toggle view">
                        <h3>{$lang.faqs_question_1}</h3>
                        <div>
                            <p>{$lang.faqs_response_1}</p>
                        </div>
                    </section>
                    <section class="toggle">
                        <h3>{$lang.faqs_question_2}</h3>
                        <div>
                            <p>{$lang.faqs_response_2}</p>
                        </div>
                    </section>
                    <section class="toggle">
                        <h3>{$lang.faqs_question_3}</h3>
                        <div>
                            <p>{$lang.faqs_response_3}</p>
                        </div>
                    </section>
                </section>
            </div>
        </section>
    </main>
    %{main_footer}%
</div>
