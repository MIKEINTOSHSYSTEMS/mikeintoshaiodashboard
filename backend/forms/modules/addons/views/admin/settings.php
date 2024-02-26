<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Theme */
/* @var $users array [id => username] of user models */
/* @var $addonUsers array [id => username] of user models */
/* @var $roles array [name => description] of user roles */
/* @var $addonRoles array [name => description] of user roles with access to addon model */

$this->title = Yii::t('app', 'Configure Add-on') . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Add-on Settings');
?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <?= $this->render('@app/themes/next/views/partials/_breadcrumbs') ?>
            </div>
        </div>
    </div>
</div>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="page-pretitle">
                    <?= Yii::t('app', 'Add-on Settings') ?>
                </div>
                <h2 class="page-title">
                    <?= Html::encode($model->name) ?>
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body addons-settings">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <?= Html::encode($this->title) ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'users' => $users,
                            'roles' => $roles,
                            'addonUsers' => $addonUsers,
                            'addonRoles' => $addonRoles,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
