<?php

use app\helpers\IconHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'System Tools');

$this->params['breadcrumbs'][] = ['label' => $this->title];

?>
<div class="settings-performance">
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">
                <?= Html::encode($this->title) ?>
            </h3>
        </div>
        <div class="card-body">
            <p><?= Yii::t('app', 'If you have any problem with your site settings or you want to improve the application performance, you can use the following tools.') ?></p>
            <p><strong><?= Yii::t('app', 'Try the following tools.')?></strong></p>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Run cron') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <?php $urlParams = [
                        '/cron',
                        'cron_key' => Yii::$app->params['App.Cron.cronKey'],
                    ]; ?>
                    <p><?= Yii::t('app', 'To configure your Cron Job on cPanel, please use the following details') ?>:</p>
                    <ul>
                        <li><small><strong><?= Yii::t('app', 'Common Settings') ?>:</strong> <?= Yii::t('app', 'Once Per Minute') ?> (* * * * *)</small></li>
                        <li><small><strong><?= Yii::t('app', 'Command') ?>:</strong> wget -O /dev/null -q -t 1 "<?= Url::to($urlParams, true) ?>"</small></li>
                    </ul>
                    <p style="margin-bottom: 0">
                        <?= Yii::t('app', 'You can run cron with third-party applications by using the following url:') ?>
                        <?= Html::a(Url::to($urlParams, true), $urlParams, ['target' => '_blank']) ?>
                    </p>
                    <?= Html::hiddenInput('action', 'cron'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <p class="form-hint">
                        <?= Yii::t('app', 'Cron takes care of running periodic tasks in order to flush mail queue and update stats.') ?>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Refresh cache & assets') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <p><?= Yii::t('app', 'Caching is just one part on making a faster application. Assets are javascript and css files also used by the site.') ?></p>
                    <div class="form-group" style="margin-top: 10px; margin-bottom: 0">
                        <?= Html::submitButton(
                            IconHelper::show('refresh')
                            . ' '
                            . Yii::t('app', 'Refresh'), ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?= Html::hiddenInput('action', 'cache'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <p class="form-hint">
                        <?= Yii::t('app', 'The database schema is stored in the cache to optimize the application performance.') ?>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Update Form Analytics Reports') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <p><?= Yii::t('app', 'Update your form stats to know how your website visitors interact with your web forms.') ?></p>
                    <div class="form-group" style="margin-top: 10px; margin-bottom: 0">
                        <?= Html::submitButton(
                            IconHelper::show('refresh')
                            . ' '
                            . Yii::t('app', 'Update'), ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?= Html::hiddenInput('action', 'analytics'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <p class="form-hint">
                        <?= Yii::t('app', 'This tool will update the form analytics reports in the entire system.') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
