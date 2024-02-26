/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.15
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */
$( document ).ready(function() {

    /**
     * File Input
     * Add the "file" css class to the file field to enhance the HTML 5 file input
     *
     * @link https://plugins.krajee.com/file-input
     */
    $.when(
        $('head')
            .append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" type="text/css" />')
            .append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" type="text/css" />')
            .append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput-rtl.min.css" type="text/css" />'),
        $.getScript( "https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js" ),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $.fn.fileinputBsVersion = "5.0"
    });
});
