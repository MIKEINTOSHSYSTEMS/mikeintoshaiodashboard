<?php

use app\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Download Files') ?></h3>
    </div>
    <div class="card-body">
        <label for="downloadWithoutJS" class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="downloadWithoutJS">
            <span class="form-check-label">
                    <?= Yii::t('app', 'Only HTML & CSS code.') ?>
                </span>
            <span class="text-muted"><?= Yii::t('app', 'Conditional rules, multi-steps, form tracking, and other javascript tools will NOT work with this code.') ?></span>
        </label>
        <div class="py-2 px-4">
            <?= Html::a(Yii::t('app', 'Download'),
                ['/form/download-html-code', 'id' => $formModel->id],
                ['id' => 'downloadHtmlCode', 'class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'Contains the HTML, JS and CSS needed to recreate your form\'s design.') ?>
        </span>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Form Endpoint: Collect data with external forms') ?></h3>
    </div>
    <div class="card-body">
        <p><?= Yii::t('app', 'Please see the URL endpoint for this form below. It can accept POST and Ajax requests. Field validation, reCAPTCHA, and file uploads are available.') ?></p>
        <form id="formEndpoint">
            <div class="input-group mb-2">
                <input type="url" id="formEndpointUrl" class="form-control" value="<?= Url::to([
                    'app/f',
                    'id' => $formModel->id
                ], true); ?>" onfocus="this.select();" onmouseup="return false;">
                <button class="btn btn-primary" type="submit"><?= Yii::t('app', 'Copy') ?></button>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'Don’t forget that name attribute of each field must be equal to the Field Name or Field Alias of your Form.') ?>
        </span>
    </div>
</div>