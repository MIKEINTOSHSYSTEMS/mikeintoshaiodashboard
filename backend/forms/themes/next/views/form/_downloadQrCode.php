<?php

use app\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Download QR Code') ?></h3>
    </div>
    <div class="card-body">
        <div class="text-center">
            <img style="width: 200px; height: 200px" src="<?= Url::to(['/form/qr-code', 'id' => $formModel->id]) ?>"  alt="<?= Yii::t('app', 'QR Code') ?>"/>
        </div>
        <div class="text-center" style="margin: 10px">
            <?= Html::a(Yii::t('app', 'Download'),
                ['/form/qr-code', 'id' => $formModel->id, 'download' => 1],
                ['id' => 'downloadQrCode', 'class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'This special QR Code can be scanned with a smartphone.') ?>
        </span>
    </div>
</div>
