/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.16
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */
$( document ).ready(function() {

    /**
     * Select2
     *
     * The jQuery replacement for select boxes
     *
     * Select2 gives you a customizable select box with support for searching,
     * tagging, remote data sets, infinite scrolling, and many other highly used options.
     *
     * @link https://select2.org/
     */
    $.when(
        $('head')
            .append('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" type="text/css" />'),
        $.getScript('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js'),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('.select2').select2({
            width: null,
        });
        $( ".select2" ).on( "select2:open", function() {
            if ( $( this ).parents( "[class*='has-']" ).length ) {
                var classNames = $( this ).parents( "[class*='has-']" )[ 0 ].className.split( /\s+/ );

                for ( var i = 0; i < classNames.length; ++i ) {
                    if ( classNames[ i ].match( "has-" ) ) {
                        $( "body > .select2-container" ).addClass( classNames[ i ] );
                    }
                }
            }
        });
    });
});
