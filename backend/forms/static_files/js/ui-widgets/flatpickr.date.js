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
     * Flatpickr for Date fields
     *
     * Replace any 'date' field with a lightweight cross-browser datepicker
     *
     * @link https://flatpickr.js.org/
     */
    $.when(
        $('head').append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" type="text/css" />'),
        $.getScript( "https://cdn.jsdelivr.net/npm/flatpickr" ),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $('body').css('min-height', '455px'); // Min height to display the datepicker within an small iframe

        $('input[type=date]').each(function () {
            var that = this;
            var flatpickrOptions = {
                altFormat: $(that).attr('data-alt-format') || "F j, Y",
                altInput: true,
                allowInput: true,
                allowInvalidPreload: $(that).attr('data-allow-invalid-preload') ? $(that).attr('data-allow-invalid-preload') === 'true' : false,
                ariaDateFormat: $(that).attr('data-aria-date-format') || 'F j, Y',
                dateFormat: 'Y-m-d',
                defaultDate: $(that).attr('data-default-date') || null,
                defaultHour: $(that).attr('data-default-hour') ? parseInt($(that).attr('data-default-hour')) : 12,
                defaultMinute: $(that).attr('data-default-minute') ? $(that).attr('data-default-minute') : 0,
                disable: typeof $(that).attr('data-disable') !== 'undefined' ? $(that).attr('data-disable').split(',') : [],
                disableMobile: $(that).attr('data-disable-mobile') ? $(that).attr('data-disable-mobile') === 'true' : false,
                enableTime: $(that).attr('data-enable-time') ? $(that).attr('data-enable-time') === 'true' : false,
                enableSeconds: $(that).attr('data-enable-seconds') ? $(that).attr('data-enable-seconds') === 'true' : false,
                hourIncrement: $(that).attr('data-hour-increment') || 1,
                inline: $(that).attr('data-inline') ? $(that).attr('data-inline') === 'true' : false,
                maxDate: $(that).attr('data-max-date') || null,
                minDate: $(that).attr('data-min-date') || null,
                minuteIncrement: $(that).attr('data-minute-increment') || 5,
                mode: $(that).attr('data-mode') || 'single',
                nextArrow: $(that).attr('data-next-arrow') || '>',
                noCalendar: $(that).attr('data-no-calendar') ? $(that).attr('data-no-calendar') === 'true' : false,
                position: $(that).attr('data-position') || 'auto',
                prevArrow: $(that).attr('data-prev-arrow') || '<',
                shorthandCurrentMonth: $(that).attr('data-shorthand-current-month') ? $(that).attr('data-shorthand-current-month') === 'true' : false,
                showMonths: $(that).attr('data-show-months') ? parseInt($(that).attr('data-show-months')) : 1,
                time_24hr: $(that).attr('data-time-24hr') ? $(that).attr('data-time-24hr') === 'true' : false,
                weekNumbers: $(that).attr('data-week-numbers') ? $(that).attr('data-week-numbers') === 'true' : false,
                monthSelectorType: $(that).attr('data-month-selector-type') || 'dropdown',
                onChange: function () {
                    $(that).trigger('change');
                }
            };

            // Time picker compatibility
            if ($(that).attr('data-enable-time') === 'true') {
                delete flatpickrOptions.dateFormat;
            }

            $(that).flatpickr(flatpickrOptions);

        });
    });

});