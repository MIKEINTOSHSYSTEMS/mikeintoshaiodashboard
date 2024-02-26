<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use kartik\helpers\Html;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var ActiveForm $form
 * @var app\models\User $user
 */

$user = Yii::$app->user->identity;

$this->title = Yii::t('app', 'API');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-preferences">
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">
                <?= IconHelper::show('key') ?> <?= Html::encode($this->title) ?>
            </h3>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <?= Yii::t('app', 'Your API key') ?>
                    </h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <?php if (!empty($user->access_token)): ?>
                    <div class="row">
                        <div class="col-xs-12 col-md-9">
                            <p><?= Yii::t('app', 'This is your personal API key. It\'s required in order to use the {name} API.', [
                                    'name' => Yii::$app->settings->get('app.name')
                                ]) ?></p>
                            <div class="form-group mb-3">
                                <label for="api-key" class="form-label"><?= Yii::t('app', 'API key') ?></label>
                                <div class="input-group">
                                    <input type="text" id="api-key" class="form-control" value="<?= $user->access_token ?>" onfocus="this.select();" onmouseup="return false;">
                                    <button type="button" id="copy-api-key" class="btn btn-info"><?= Yii::t('app', 'Copy') ?></button>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <?php if (empty($user->access_token)): ?>
                                    <p><?= Yii::t('app', 'There is no personal API key associated with your account. It\'s required in order to use the {name} API.', [
                                            'name' => Yii::$app->settings->get('app.name')
                                        ]) ?></p>
                                    <?= Html::a(Yii::t('app', 'Generate API key'), Url::current(), [
                                        'class' => 'btn btn-info',
                                        'data-method' => 'POST',
                                        'data-params' => [
                                            'action' => 'generate',
                                        ]]) ?>
                                <?php else: ?>
                                <?= Html::a(Yii::t('app', 'Regenerate API key'), Url::current(), [
                                        'class' => 'btn btn-info',
                                        'data-method' => 'POST',
                                        'data-params' => [
                                            'action' => 'regenerate',
                                        ],
                                        'data-confirm' => Yii::t('app', 'Are you sure you want to regenerate your {name} API key? Any existing API integrations will stop working, and you will not be able to recover your current key.', [
                                        'name' => Yii::$app->settings->get('app.name'),
                                    ])]) ?>
                                <?= Html::a(Html::tag('i', '', ['class' => 'fas fa-trash-alt']), Url::current(), [
                                        'title' => Yii::t('app', 'Delete key'),
                                        'class' => 'btn btn-icon btn-danger',
                                        'data-method' => 'POST',
                                        'data-params' => [
                                            'action' => 'delete',
                                        ],
                                        'data-confirm' => Yii::t('app', 'Are you sure you want to delete your {name} API key? Any existing API integrations will stop working, and you will not be able to recover your current key.', [
                                        'name' => Yii::$app->settings->get('app.name'),
                                    ])]) ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <?= Yii::t('app', "With this API key, you'll be ready to start calling {name} API.", [
                            'name' => Yii::$app->settings->get('app.name')
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$copiedText = Yii::t('app', 'Copied');

$script = <<< JS
$(document).ready(function(){
    $('#copy-api-key').click(function(e) {
        e.preventDefault();
        /* Get the text field */
        var copyText = document.getElementById("api-key");
        copyText.select();
        document.execCommand("copy");
        alert("{$copiedText}");
    });
})

JS;
$this->registerJs($script, $this::POS_END);
?>