"use strict";

$(document).ready(function()
{
    $('.homepage_slideshow').owlCarousel({
        items:1,
        loop:true,
        margin:0,
        nav:false
    });
});

function map()
{
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: {
            lat: 20.2096399,
            lng: -87.4806307
        }
    });

    // var circle_surenna = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.2174885,
    //         lng: -87.4834143
    //     },
    //     radius: 100
    // });

    var marker_surenna = new google.maps.Marker({
        position: {
            lat: 20.2174885,
            lng: -87.4834143
        },
        map: map,
        icon: '/assets/images/marker_surenna.png'
    });

    // var title_surenna = new google.maps.InfoWindow({
    //     content: 'Surenna'
    // });
    //
    // title_surenna.open(map, marker_surenna);

    // var circle_sabella = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.1974596,
    //         lng: -87.4823512
    //     },
    //     radius: 100
    // });

    var marker_sabella = new google.maps.Marker({
        position: {
            lat: 20.1974596,
            lng: -87.4823512
        },
        map: map,
        icon: '/assets/images/marker_sabella.png'
    });

    // var title_sabella = new google.maps.InfoWindow({
    //     content: 'Sabella'
    // });
    //
    // title_sabella.open(map, marker_sabella);

    // var circle_unaluna = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.2078917,
    //         lng: -87.4717841
    //     },
    //     radius: 100
    // });

    var marker_unaluna = new google.maps.Marker({
        position: {
            lat: 20.2078917,
            lng: -87.4717841
        },
        map: map,
        icon: '/assets/images/marker_unaluna.png'
    });

    // var title_unaluna = new google.maps.InfoWindow({
    //     content: 'Una Luna'
    // });
    //
    // title_unaluna.open(map, marker_unaluna);

    // var circle_elcanto = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.1914215,
    //         lng: -87.4801696
    //     },
    //     radius: 100
    // });

    var marker_elcanto = new google.maps.Marker({
        position: {
            lat: 20.1914215,
            lng: -87.4801696
        },
        map: map,
        icon: '/assets/images/marker_elcanto.png'
    });

    // var title_elcanto = new google.maps.InfoWindow({
    //     content: 'El Canto'
    // });
    //
    // title_elcanto.open(map, marker_elcanto);

    // var circle_selvamaya = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.188197,
    //         lng: -87.4724129
    //     },
    //     radius: 100
    // });

    var marker_selvamaya = new google.maps.Marker({
        position: {
            lat: 20.188197,
            lng: -87.4724129
        },
        map: map,
        icon: '/assets/images/marker_selvamaya.png'
    });

    // var title_selvamaya = new google.maps.InfoWindow({
    //     content: 'Selva Maya'
    // });
    //
    // title_selvamaya.open(map, marker_selvamaya);

    // var circle_sicaru = new google.maps.Circle({
    //     strokeColor: '#fa7268',
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: '#fa7268',
    //     fillOpacity: 0.2,
    //     map: map,
    //     center: {
    //         lat: 20.2054413,
    //         lng: -87.4775726
    //     },
    //     radius: 100
    // });

    var marker_sicaru = new google.maps.Marker({
        position: {
            lat: 20.2054413,
            lng: -87.4775726
        },
        map: map,
        icon: '/assets/images/marker_sicaru.png'
    });

    // var title_sicaru = new google.maps.InfoWindow({
    //     content: 'Sicarú'
    // });
    //
    // title_sicaru.open(map, marker_sicaru);
}
