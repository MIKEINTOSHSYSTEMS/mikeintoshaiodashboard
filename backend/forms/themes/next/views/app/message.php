<?php

use yii\web\View;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $message string */
/* @var app\models\Form $formModel */

// PHP options required by embed.js
$options = array(
    "id" => $formModel->id,
    "hashId" => $formModel->hashId,
);
// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'form-options');

$message = !empty($formModel->message) ?
    $formModel->message :
    Html::tag('h3', Yii::t('app', 'This form is no longer accepting new submissions.'), [
        'class' => 'text-center'
    ]);
?>
<div class="app-message">
    <?= Html::decode($message) ?>
</div>

<?php
// Utilities required for javascript
$this->registerJsFile('@web/static_files/js/form.utils.min.js', ['depends' => \yii\web\JqueryAsset::class]);

$js = <<<JS
    jQuery(document).ready(function(){

        // Send the new height to the parent window
        Utils.postMessage({
            height: $("html").height()
        });

        // Send message to display the restricted form
        Utils.postMessage({
            action: 'view'
        });

    });
JS;

$this->registerJs($js, $this::POS_END, 'message');

?>