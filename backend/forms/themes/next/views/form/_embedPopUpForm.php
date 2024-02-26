<?php

use app\helpers\IconHelper;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */
/* @var $popupForm app\models\forms\PopupForm */

?>
<style>
    .noUi-tooltip {
        display: none !important;
    }
    .noUi-active .noUi-tooltip {
        display: block !important;
    }
</style>

<?php $form = ActiveForm::begin([
    'id' => 'popup-form',
    'action' => ['form/popup-preview', 'id' => $formModel->id],
    'options' => [
        'class' => 'form-vertical',
        'target' => '_blank',
    ],
]) ?>
<div class="row mb-3">
    <div class="col-sm-4">
        <?php $popupForm->button_text = Yii::t('app', 'Open Pop-Up Form'); ?>
        <?= $form->field($popupForm, 'button_text') ?>
    </div>
    <div class="col-sm-4">
        <?php $popupForm->button_placement = 'inline'; ?>
        <?= $form->field($popupForm, 'button_placement')->dropDownList([
            'inline' => Yii::t('app', 'Inline'),
            'right' => Yii::t('app', 'Right'),
            'left' => Yii::t('app', 'Left'),
            'bottom' => Yii::t('app', 'Bottom'),
        ], [
            'class' => 'form-select',
            'prompt'=>Yii::t('app', 'Select a placement...'),
        ]) ?>
    </div>
    <div class="col-sm-4">
        <?php $popupForm->button_color = 'default'; ?>
        <?= $form->field($popupForm, 'button_color')->dropDownList([
            'default' => Yii::t('app', 'Default'),
            'success' => Yii::t('app', 'Success'),
            'error' => Yii::t('app', 'Error'),
            'warning' => Yii::t('app', 'Warning'),
            'secondary' => Yii::t('app', 'Secondary'),
        ], [
            'class' => 'form-select',
            'prompt'=>Yii::t('app', 'Select a color theme...'),
        ]) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-6">
        <?= $form->field($popupForm, 'popup_margin', [
            'template' => "{label}\n<div id='popupMarginEl'></div>\n{input}\n{hint}\n{error}"
        ])->textInput(['class' => 'form-control d-none']) ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($popupForm, 'popup_padding', [
            'template' => "{label}\n<div id='popupPaddingEl'></div>\n{input}\n{hint}\n{error}"
        ])->textInput(['class' => 'form-control d-none']) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-6">
        <?= $form->field($popupForm, 'popup_width', [
            'template' => "{label}\n<div id='popupWidthEl'></div>\n{input}\n{hint}\n{error}"
        ])->textInput(['class' => 'form-control d-none']) ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($popupForm, 'popup_radius', [
            'template' => "{label}\n<div id='popupRadiusEl'></div>\n{input}\n{hint}\n{error}"
        ])->textInput(['class' => 'form-control d-none']) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-6">
        <?php $popupForm->animation_effect = 'fade-in'; ?>
        <?= $form->field($popupForm, 'animation_effect')->dropDownList([
            'fade-in' => Yii::t('app', 'Fade In'),
            'fade-in-scale' => Yii::t('app', 'Fade In & Scale'),
            'slide-in-top' => Yii::t('app', 'Slide In Top'),
            'slide-in-right' => Yii::t('app', 'Slide In Right'),
            'slide-in-bottom' => Yii::t('app', 'Slide In Bottom'),
            'slide-in-left' => Yii::t('app', 'Slide In Left'),
        ], [
            'class' => 'form-select',
        ]) ?>
    </div>
    <div class="col-sm-6">
        <?php $popupForm->animation_duration = '0.6'; ?>
        <?= $form->field($popupForm, 'animation_duration')->dropDownList([
            '0.3' => Yii::t('app', 'Fast'),
            '0.6' => Yii::t('app', 'Normal'),
            '0.9' => Yii::t('app', 'Slow'),
        ], [
            'class' => 'form-select',
        ]) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-6">
        <?php $popupForm->popup_color = 'rgb(255, 255, 255)'; ?>
        <?= $form->field($popupForm, 'popup_color')->widget(ColorInput::class, [
            'value' => 'rgb(255, 255, 255)',
            'options' => ['placeholder' => Yii::t('app', 'Choose your color...')],
            'pluginOptions' => [
                'showInput' => false,
                'preferredFormat' => 'rgb'
            ]
        ]) ?>
    </div>
    <div class="col-sm-6">
        <?php $popupForm->overlay_color = 'rgba(0, 0, 0, 0.75)'; ?>
        <?= $form->field($popupForm, 'overlay_color')->widget(ColorInput::class, [
            'options' => ['placeholder' => Yii::t('app', 'Choose your color...')],
            'pluginOptions' => [
                'showInput' => false,
                'preferredFormat' => 'rgb'
            ]
        ]) ?>
    </div>
</div>
<hr>
<div class="row mb-3">
    <div class="col-sm-12">
        <button type="submit" id="preview" name="preview" class="btn btn-default me-1">
            <?= Yii::t('app', 'Preview') ?>
        </button>
        <button type="button" id="generateCode" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generatedCodeModal">
            <?= IconHelper::show('check') ?> <?= Yii::t('app', 'Generate Code') ?>
        </button>
    </div>
</div>
<?php ActiveForm::end() ?>

<!-- Modal -->
<div class="modal fade" id="generatedCodeModal" tabindex="-1" role="dialog" aria-labelledby="generatedCodeLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="generatedCodeLabel"><?= Yii::t('app', 'Embed Pop-Up Form') ?></h4>
            </div>
            <div class="modal-body">
                <p><?= Yii::t('app', 'The easiest way to create a popup window and embed the Form into it is to do so using the following code.') ?></p>
                <div class="card">
                    <div class="card-header">
                        <label for="generatedCode" class="card-title">
                            <?= Yii::t('app', 'Embed with design:') ?>
                        </label>
                    </div>
                    <div class="card-body">
                        <form>
                            <textarea id="generatedCode" class="form-control" rows="6" onfocus="this.select();" onmouseup="return false;"><?= Yii::t('app', 'Loading...') ?></textarea>
                        </form>
                    </div>
                    <div class="card-footer">
                        <span class="text-muted">
                            <?= Yii::t('app', 'Remember always between the opening and closing &lt;body&gt; tag.') ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">
                    <?= Yii::t('app', 'Close') ?>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
$copiedText = Yii::t('app', 'Copied');

$script = <<< JS
document.addEventListener("DOMContentLoaded", function() {
    // PopUpp Margin
    var popupMarginEl = document.getElementById('popupMarginEl');
    var popupMarginSlider = noUiSlider.create(popupMarginEl, {
        tooltips: true,
        step: 1,
        start: 60,
        range: {min: 0, max: 120}
    });
    var popupMarginField = document.getElementById('popupform-popup_margin');
    popupMarginSlider.on('update', function (values, handle) {
        popupMarginField.value = values[handle];
    });
    // PopUp Padding
    var popupPaddingEl = document.getElementById('popupPaddingEl');
    var popupPaddingSlider = noUiSlider.create(popupPaddingEl, {
        tooltips: true,
        step: 1,
        start: 20,
        range: {min: 0, max: 60}
    });
    var popupPaddingField = document.getElementById('popupform-popup_padding');
    popupPaddingSlider.on('update', function (values, handle) {
        popupPaddingField.value = values[handle];
    });
    // PopUp Width
    var popupWidthEl = document.getElementById('popupWidthEl');
    var popupWidthSlider = noUiSlider.create(popupWidthEl, {
        tooltips: true,
        step: 1,
        start: 60,
        range: {min: 20, max: 90}
    });
    var popupWidthField = document.getElementById('popupform-popup_width');
    popupWidthSlider.on('update', function (values, handle) {
        popupWidthField.value = values[handle];
    });
    // PopUp Radius
    var popupRadiusEl = document.getElementById('popupRadiusEl');
    var popupRadiusSlider = noUiSlider.create(popupRadiusEl, {
        tooltips: true,
        step: 1,
        start: 10,
        range: {min: 0, max: 60}
    });
    var popupRadiusField = document.getElementById('popupform-popup_radius');
    popupRadiusSlider.on('update', function (values, handle) {
        popupRadiusField.value = values[handle];
    });
});
JS;
$this->registerJs($script, $this::POS_END);
?>