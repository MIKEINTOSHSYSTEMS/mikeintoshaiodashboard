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
     * jQuery Mask Plugin
     * A jQuery Plugin to make masks on form fields and HTML elements.
     *
     * @link https://igorescobar.github.io/jQuery-Mask-Plugin/
     */

    $.when(
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){

        /**
         * To get your mask applied with the data-mask attribute just use it as the same way you use with the $.mask function.
         * E.g.
         * <input type="text" name="field-name" data-mask="00/00/0000" />
         * <input type="text" name="field-name" data-mask="00/00/0000" data-mask-reverse="true" />
         * <input type="text" name="field-name" data-mask="00/00/0000" data-mask-clearifnotmatch="true" />
         * <input type="text" name="field-name" data-mask="00/00/0000" data-mask-selectonfocus="true" />
         */

    });

});
