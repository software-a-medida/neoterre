<?php

header('Content-Type: text/xml');

$https = 'https://neoterre.mx';
$database = new mysqli('somosrepublica.mx', 'admin_neoterre', 'i12L8_td', 'admin_website');

$xml =
'<?xml version="1.0" encoding="iso-8859-1"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>' . $https . '</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/desarrollador</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/casas</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/departamentos</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/lotes</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/surenna</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/sabella</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/aruna</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/villaggio</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/unaluna</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/barriocale</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/elcanto</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/selvamaya</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/productos/sicaru</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/blog</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/faqs</loc>
        <changefreq>yearly</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>' . $https . '/contacto</loc>
        <changefreq>yearly</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>' . $https . '/aviso-de-privacidad</loc>
        <changefreq>yearly</changefreq>
        <priority>0.60</priority>
    </url>
</urlset>';

$database->close();

echo $xml;
