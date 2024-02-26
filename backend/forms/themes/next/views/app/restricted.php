<?php

use app\components\widgets\ActiveForm;
use app\helpers\Html;
use yii\web\JqueryAsset;
use yii\web\View;

/* @var $this yii\web\View */
/* @var app\models\forms\RestrictedForm $model */
/* @var app\models\Form $formModel */

// PHP options required by embed.js
$options = array(
    "id" => $formModel->id,
    "hashId" => $formModel->hashId,
);
// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'form-options');

?>
<div class="container-fluid g-0 app-restricted">
    <div class="row">
        <div class="col-12">
            <h1 class="text-danger">
                <?= Yii::t('app', 'Access to this form is restricted.') ?>
            </h1>
            <?php $form = ActiveForm::begin([
                'id' => 'password-form',
                'enableClientValidation' => false,
                'options' => [
                    'autocomplete' => 'off'
                ]
            ]); ?>
            <?= $form->field($model, 'password', [
                'inputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => Yii::t('app', 'Please enter your password.')
                ]
            ])->passwordInput()->label(Yii::t('app', 'Password')) ?>
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php

// Add default body padding
$this->registerCss("
body { padding: 20px }
@media (min-width: 768px) {
    body {
        padding: 25px;
    }
}
");

// Utilities required for javascript
$this->registerJsFile('@web/static_files/js/form.utils.min.js', ['depends' => JqueryAsset::class]);

$js = <<<JS
    jQuery(document).ready(function(){

        // Send the new height to the parent window
        Utils.postMessage({
            height: $("body").outerHeight(true)
        });

        // Send message to display the restricted form
        Utils.postMessage({
            action: 'view'
        });

    });
JS;

$this->registerJs($js, $this::POS_END, 'password');
