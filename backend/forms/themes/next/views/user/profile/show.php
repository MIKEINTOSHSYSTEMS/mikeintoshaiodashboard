<?php

use app\helpers\IconHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View          $this
 * @var app\models\Profile $profile
 */

$this->title = empty($profile->name) ? Html::encode($profile->user->username) : Html::encode($profile->name);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <?= Html::img(
                    $profile->getAvatarUrl(230),
                    [
                        'class' => 'img-rounded img-responsive',
                        'alt' => $profile->user->username,
                    ]
                ) ?>
            </div>
            <div class="col-sm-6 col-md-8">
                <h4><?= $this->title ?></h4>
                <ul style="padding: 0; list-style: none outside none;">
                    <?php if (!empty($profile->location)): ?>
                        <li>
                            <?= IconHelper::show('map-2') ?>
                            <?= Html::encode($profile->location) ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($profile->website)): ?>
                        <li>
                            <?= IconHelper::show('world-www') ?>
                            <?= Html::a(Html::encode($profile->website), Html::encode($profile->website)) ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($profile->public_email)): ?>
                        <li>
                            <?= IconHelper::show('mail') ?>
                            <?= Html::a(
                                Html::encode($profile->public_email),
                                'mailto:' .
                                Html::encode($profile->public_email)
                            )
                            ?>
                        </li>
                    <?php endif; ?>
                    <li>
                        <?= IconHelper::show('clock') ?>
                        <?= Yii::t('app', 'Joined on {0, date}', $profile->user->created_at) ?>
                    </li>
                </ul>
                <?php if (!empty($profile->bio)): ?>
                    <p><?= Html::encode($profile->bio) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
