<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\components\widgets\Icon;
use app\modules\setup\helpers\Requirements;
use app\modules\setup\helpers\RequirementChecker;

$this->title = Yii::t('app', 'Verify requirements');

$passed = true;
$frameworkPath = Yii::getAlias('@app') . '/vendor/yiisoft/yii2';
$requirementChecker = new RequirementChecker();
?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Verify Requirements') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Set Up Database') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Install App') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Create Admin Account') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h2', Yii::t('app', 'Verify requirements'), ['class' => 'step-title']) ?>
        <?php $requirementChecker->check(Requirements::all())->render(); ?>

        <?php if ($requirementChecker->getResult()) : ?>
            <a href="<?= Url::to(['3']) ?>" class="btn btn-primary">
                <?= Yii::t('app', 'Continue') ?>
            </a>
        <?php endif; ?>
    </div>
</div>