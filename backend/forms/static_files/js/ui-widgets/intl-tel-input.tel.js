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
     * International Telephone Input
     * Adds a flag dropdown to specific fields and displays a relevant placeholder.
     * The user types their national number and the plugin send the full standardized international number
     *
     * @link https://intl-tel-input.com/
     */

    $.when(
        $('head').append('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" type="text/css" />'),
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"),
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.min.js"),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $('input[type=tel]').each(function () {
            var that = this;
            var altID = that.id + '_alt';
            $(that)
                .after(
                    $(that).clone().attr('id', altID).attr('name', altID)
                ).hide();
            $("#" + altID)
                .change(function () {
                    $(that).val($(this).intlTelInput("getNumber"));
                })
                .intlTelInput({
                    initialCountry: $(that).attr('data-initial-country') || 'auto',
                    geoIpLookup: function(callback) {
                        if (this.initialCountry === 'auto') {
                            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                                var countryCode = (resp && resp.country) ? resp.country : "";
                                callback(countryCode);
                            });
                        }
                    }
                });
        });
        // CSS Fixes
        $('body').css('min-height', '150px'); // Set a min height for show the select list
        $('.iti').css('width', '100%');
    });

});
