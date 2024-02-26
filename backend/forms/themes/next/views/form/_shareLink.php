<?php

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

use yii\helpers\Url;

?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Link to your Form') ?></h3>
    </div>
    <div class="card-body">
        <p><?= Yii::t('app', 'The following permanent URL will link to the form you have created immediately. It\'s a one step way to share everywhere.') ?></p>
        <form id="showForm">
            <div>
                <label for="withoutDesign" class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="withoutDesign">
                    <span class="form-check-label"><?= Yii::t('app', 'Without design') ?></span>
                </label>
                <label for="withoutBox" class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="withoutBox">
                    <span class="form-check-label"><?= Yii::t('app', 'Without box') ?></span>
                </label>
                <label for="withoutCustomJS" class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="withoutCustomJS">
                    <span class="form-check-label"><?= Yii::t('app', 'Without custom JS') ?></span>
                </label>
            </div>
            <div class="input-group mb-2">
                <input type="url" id="formUrl" class="form-control" value="<?= Url::to([
                    'app/form',
                    'id' => $formModel->hashId
                ], true); ?>" onfocus="this.select();" onmouseup="return false;">
                <button class="btn btn-primary" type="submit"><?= Yii::t('app', 'Go!') ?></button>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'Share your form with others through email, social media or blog.') ?>
        </span>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Friendly Link to your Form') ?></h3>
    </div>
    <div class="card-body">
        <p><?= Yii::t('app', 'This is the friendly URL that references your form and will change if you edit your form\'s name.') ?></p>
        <form id="showFormAlt">
            <div>
                <label for="withoutBoxAlt" class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="withoutBoxAlt">
                    <span class="form-check-label"><?= Yii::t('app', 'Without box') ?></span>
                </label>
            </div>
            <div class="input-group mb-2">
                <input type="url" id="formUrlAlt" class="form-control" value="<?= Url::to([
                    'app/forms',
                    'slug' => $formModel->slug
                ], true); ?>" onfocus="this.select();" onmouseup="return false;">
                <button class="btn btn-primary" type="submit"><?= Yii::t('app', 'Go!') ?></button>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'If you edit your form\'s name, all previously shared friendly link URL\'s will no longer work.') ?>
        </span>
    </div>
</div>
