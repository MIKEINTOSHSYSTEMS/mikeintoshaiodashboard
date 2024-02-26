<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use yii\bootstrap5\Nav;
use yii\helpers\Html;

/**
 * @var yii\web\View        $this
 * @var app\models\User $user
 */

$this->title = Yii::t('app', 'Create a user account');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

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
<?= $this->render(
    '/shared/_alert',
    [
        'module' => Yii::$app->getModule('user'),
    ]
) ?>
<!-- Page body -->
<div class="page-body theme-create">
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
                        <div class="row">
                            <div class="col-9 col-sm-6">
                                <?= $this->render('/shared/_menu') ?>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <?= Yii::t('app', 'Manage account') ?>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <?= Nav::widget(
                                            [
                                                'options' => [
                                                    'class' => 'nav-pills nav-stacked flex-column',
                                                ],
                                                'items' => [
                                                    [
                                                        'label' => Yii::t('app', 'Account details'),
                                                        'url' => ['/user/admin/create'],
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Profile details'),
                                                        'linkOptions' => [
                                                            'class' => 'disabled',
                                                            'onclick' => 'return false;',
                                                        ],
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Information'),
                                                        'linkOptions' => [
                                                            'class' => 'disabled',
                                                            'onclick' => 'return false;',
                                                        ],
                                                    ],
                                                ],
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <?= Yii::t(
                                                'app',
                                                'Account details'
                                            ) ?>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-info">
                                            <?= Yii::t('app', 'A welcome email to the new user will be sent.') ?>
                                        </div>
                                        <?php $form = ActiveForm::begin(
                                            [
                                                'enableAjaxValidation' => true,
                                                'enableClientValidation' => false,
                                                'fieldConfig' => [
                                                    'horizontalCssClasses' => [
                                                        'wrapper' => 'col-sm-9',
                                                    ],
                                                ],
                                            ]
                                        ); ?>

                                        <?= $this->render('/admin/_user', ['form' => $form, 'user' => $user]) ?>

                                        <div class="form-action">
                                            <?= Html::submitButton(
                                                IconHelper::show('check') .
                                                Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
                                            ) ?>
                                        </div>

                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>