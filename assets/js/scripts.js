"use strict";

!function ( $ )
{
    "use strict"

    const app = function () {}

    app.prototype.onResize = function ()
    {
        window.addEventListener('resize', function ( e )
        {
            window.requestAnimationFrame(function ()
            {
            })
        })
    },

    app.prototype.test = function ()
    {
    },

    app.prototype.init = function ()
    {
        $( document ).on('click', '#trigger-nav-mobile', function ( event )
        {
            event.stopPropagation()

            $(this).find('> .hamburger-menu').toggleClass('animate');
            $('body').toggleClass('mobile-menu-open');
        });

        this.onResize()
    }

    $.app = new app
    $.app.Constructor = app
}( window.jQuery ),

function ( $ )
{
    $.app.init()
}( window.jQuery )
