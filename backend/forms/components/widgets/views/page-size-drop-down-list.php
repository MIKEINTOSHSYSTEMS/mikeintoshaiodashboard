<?php

use yii\helpers\Html;

/**
 * @var string $url
 * @var string $selectedSize
 * @var array $sizes
 * @var string $cssClass
 */

$this->registerJs("$('body').on('change', '.grid-view .page-size', function() {
    if (this.value) {
        var url = '{$url}';
        $.post(url, { 'page-size': this.value })
            .done(function(response) {
                if (response.success) {
                    window.location.reload();                    
                }
            });
    }
});");
return Html::dropDownList('page-size', $selectedSize, $sizes, [ 'class' => $cssClass ]);