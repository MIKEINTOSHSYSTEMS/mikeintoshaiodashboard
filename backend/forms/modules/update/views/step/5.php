<?php

use app\components\widgets\Icon;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Congratulations, you have updated Easy Forms!');

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Requirements') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Update app') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h2', Yii::t('app', 'Congratulations, you have updated Easy Forms!'), ['class' => 'step-title']) ?>
        <p class="text-success">
            <span class="fas fa-check"></span>
            <?= Yii::t('app', 'You have successfully updated your Easy Forms application.') ?>
        </p>
        <?= Html::tag('h3', Yii::t('app', 'Next Step'), ['class' => 'step-title']) ?>
        <ul>
            <li>
                <?= Yii::t(
                    'app',
                    'For security reasons, you must comment again the uncommented line in the "config/web.php" file.'
                ) ?>
            </li>
        </ul>
        <p class="text-muted">
            <?= Yii::t('app', 'Note: If you have problems running your site, get in touch with our support team and we will be more than happy to help you.') ?>
        </p>
        <a href="<?= Url::to(Url::home(true)) ?>" class="btn btn-primary">
            <?= Yii::t('app', 'Go to Easy Forms') ?>
        </a>
    </div>
</div>
