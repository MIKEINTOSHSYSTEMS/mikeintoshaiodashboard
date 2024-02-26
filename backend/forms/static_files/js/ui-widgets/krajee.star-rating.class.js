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
     * Bootstrap Star Rating
     *
     * Display a Star Rating widget on any field with the '.rating' css class
     * Also, we can display custom theme with the following css classes:
     *
     * '.rating-theme-fas': Font Awesome 5.x Theme
     * '.rating-theme-uni': Unicode Theme
     * '.rating-theme-gly': Glyphicons Theme
     *
     * @link https://plugins.krajee.com/star-rating
     */
    $.when(
        $('head')
            .append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.0/css/star-rating.min.css" type="text/css" />')
            .append('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.0/themes/krajee-svg/theme.css" type="text/css" />'),
        $.getScript( "https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.0/js/star-rating.min.js" ),
        $.Deferred(function( deferred ){
            $( deferred.resolve );
        })
    ).done(function(){
        $.when(
            $('head')
                .append('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" type="text/css" />'),
            $.getScript( "https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.0/themes/krajee-svg/theme.js" ),
            $.Deferred(function( deferred ){
                $( deferred.resolve );
            })
        ).done(function(){

            $('.rating-theme-fas').each(function(){
                var that = this;
                $(this).rating({
                    hoverOnClear: $(this).attr('hover-on-clear') ? $(this).attr('data-on-clear') === 'true' : false,
                    theme: 'krajee-fas',
                    containerClass: $(this).attr('data-container-class') || 'is-star',
                    defaultCaption: $(this).attr('data-default-caption') || '{rating} stars',
                    starCaptions: function (rating) {
                        return rating === 1 ? ($(that).attr('data-star-caption') || 'One star') : rating + ' ' + ($(that).attr('data-stars-caption') || '{rating} stars');
                    },
                    filledStar: $(this).attr('data-filled-star') || '<i class="fas fa-star"></i>',
                    emptyStar: $(this).attr('data-empty-star') || '<i class="far fa-star"></i>',
                });
            });

            $('.rating-theme-uni').each(function(){
                var that = this;
                $(this).rating({
                    hoverOnClear: $(this).attr('hover-on-clear') ? $(this).attr('data-on-clear') === 'true' : false,
                    theme: 'krajee-uni',
                    containerClass: $(this).attr('data-container-class') || 'is-star',
                    defaultCaption: $(this).attr('data-default-caption') || '{rating} stars',
                    starCaptions: function (rating) {
                        return rating === 1 ? ($(that).attr('data-star-caption') || 'One star') : rating + ' ' + ($(that).attr('data-stars-caption') || '{rating} stars');
                    },
                    filledStar: $(this).attr('data-filled-star') || '&#9733;',
                    emptyStar: $(this).attr('data-empty-star') || '&#9734;',
                });
            });

            $('.rating-theme-gly').each(function(){
                var that = this;
                $(this).rating({
                    hoverOnClear: $(this).attr('hover-on-clear') ? $(this).attr('data-on-clear') === 'true' : false,
                    theme: 'krajee-gly',
                    containerClass: $(this).attr('data-container-class') || 'is-star',
                    defaultCaption: $(this).attr('data-default-caption') || '{rating} stars',
                    starCaptions: function (rating) {
                        return rating === 1 ? ($(that).attr('data-star-caption') || 'One star') : rating + ' ' + ($(that).attr('data-stars-caption') || '{rating} stars');
                    },
                    filledStar: $(this).attr('data-filled-star') || '<i class="glyphicon glyphicon-star"></i>',
                    emptyStar: $(this).attr('data-empty-star') || '<i class="glyphicon glyphicon-star-empty"></i>',
                });
            });
        });
    });
});
