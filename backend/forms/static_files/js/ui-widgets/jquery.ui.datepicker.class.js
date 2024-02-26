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
     * jQuery UI Datepicker
     * Select a date from a popup on any field with the "jquery-ui-datepicker" css class
     *
     * @link https://jqueryui.com/datepicker/
     */

    $.when(
        $('head').append('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" type="text/css" />'),
        $.getScript( "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $('body').css('min-height', '455px'); // Min height to display the datepicker within an small iframe
        $('.ef-jquery-ui-datepicker').each(function () {
            var that = this;
            $(that).attr('type', 'text')

            var datePicker = $(that).clone();
            datePicker
                .attr('id', that.id + '_alt').attr('name', that.id + '_alt')
                .datepicker({
                    dateFormat: $(that).attr('data-date-format') || 'mm/dd/yy',
                    showButtonPanel: $(that).attr('data-show-button-panel') || false,
                    changeMonth: $(that).attr('data-change-month') || false,
                    changeYear: $(that).attr('data-change-year') || false,
                    yearRange: $(that).attr('data-year-range') || 'c-10:c+10',
                    numberOfMonths: $(that).attr('data-number-of-months') ? parseInt($(that).attr('data-number-of-months')) : 1,
                    minDate: $(that).attr('data-min-date') || null,
                    maxDate: $(that).attr('data-max-date') || null,
                    isRTL: $(that).attr('data-is-rtl') || false,
                    showWeek: $(that).attr('data-show-week') || false,
                    firstDay: $(that).attr('data-first-day') ? parseInt($(that).attr('data-first-day')) : 0,
                    altField: this,
                    altFormat: "yy-mm-dd"
                })
                .on('change', function () {
                    $(that).trigger('change');
                });

            if ($(that).attr('data-set-date')) {
                datePicker.datepicker("setDate", $(that).attr('data-set-date'))
            }

            $(that)
                .after(datePicker)
                .hide();
        });
    });

});
