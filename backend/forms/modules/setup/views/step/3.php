<?php

use yii\helpers\Html;
use app\components\widgets\ActiveForm;

/** @var \yii\web\View $this */
/** @var bool $connectionOk */
/** @var \app\modules\setup\models\forms\DbForm $model */

$this->title = Yii::t('app', 'Database Configuration');

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Verify Requirements') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Set Up Database') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Install App') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Create Admin Account') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper mb-4">
        <?= Html::tag('h2', Yii::t('app', 'Database Configuration'), ['class' => 'step-title']) ?>
        <p><?= Yii::t('app', "To set up your Easy Forms database, enter the following information.") ?></p>
        <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_VERTICAL,
        ]); ?>
        <?= $form->field($model, 'db_name')->hint(
            Yii::t('app', 'The name of the database where your data will be stored in. It must exist on your server before Easy Forms can be installed.')
        ) ?>
        <?= $form->field($model, 'db_user') ?>
        <?= $form->field($model, 'db_pass')->passwordInput() ?>

        <style>
            .form-group:last-of-type {
                margin-bottom: 0;
            }
        </style>
        <div class="advancedOptionsWrapper" style="border: 1px solid #f3f5f7; padding: 7px 10px; margin-bottom: 15px">
            <?= Html::a('&#9654; ' . Yii::t('app', 'Advanced options'), '#', [
                'id' => 'toogleAdvancedOptions',
                'style' => 'font-size: 0.875em; color: #313941; font-weight: bold; text-transform: uppercase; text-decoration:none']) ?>
            <div id="advancedOptions" style="margin-top: 15px">
                <p style="color: #68798a">
                    <?= Yii::t('app', "These options are only necessary for some sites. If you're not sure what you should enter here, leave the default settings or check with your hosting provider.") ?>
                </p>
                <?= $form->field($model, 'db_host')->hint(
                    Yii::t('app', 'If your database is located on a different server, change this.')
                ) ?>
                <?= $form->field($model, 'db_port')->hint(
                    Yii::t('app', 'If your database server is listening to a non-standard port, enter its number.')
                ) ?>
                <?= $form->field($model, 'tablePrefix')->hint(
                    Yii::t('app', "If more than one application will be sharing this database, a unique table prefix - such as 'ef_' - will prevent collisions.")
                ) ?>
            </div>
        </div>

        <div class="form-action">
            <?= Html::submitButton(Yii::t('app', 'Test connection'), [
                'class' => 'btn btn-default pull-left',
                'name' => 'test',
            ]) ?>
            <?php if ($connectionOk) : ?>
                <?= Html::submitButton(
                    Yii::t('app', 'Save and continue'),
                    [
                        'class' => 'btn btn-primary pull-right',
                        'name' => 'save',
                    ]
                ) ?>
            <?php endif; ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php
$advancedOptions = Yii::t('app', 'Advanced options');

$js = <<<JS
    $(document).ready(function(){

        $("#advancedOptions").hide();
        $('#toogleAdvancedOptions').click(function( e ){
            e.preventDefault(); // If you use anchors
            var SH = this.SH^=1; // "Simple toggler"
            $(this).html(SH?'&#9660; $advancedOptions':'&#9654; $advancedOptions')
                   .css({backgroundPosition:'0 '+ (SH?-18:0) +'px'})
                   .next("#advancedOptions").slideToggle();
        });

    });
JS;

$this->registerJs($js, $this::POS_END, 'advanced-options');
?>