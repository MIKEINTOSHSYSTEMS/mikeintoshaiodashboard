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
echo Html::dropDownList('page-size', $selectedSize, $sizes, [
    'class' => 'm-0 form-select page-size',
]);