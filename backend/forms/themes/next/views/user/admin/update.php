<?php

use app\models\User;
use yii\bootstrap5\Nav;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var View   $this
 * @var User   $user
 * @var string $content
 * @var string $title
 */

$this->title = Yii::t('app', 'Update user account');
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
                                        <div class="card-title">
                                            <?= Yii::t('app', 'Manage account') ?>
                                        </div>
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
                                                        'url' => ['/user/admin/update', 'id' => $user->id],
                                                        'visible' => Yii::$app->user->can('updateUsers'),
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Profile details'),
                                                        'url' => ['/user/admin/update-profile', 'id' => $user->id],
                                                        'visible' => Yii::$app->user->can('updateUsers'),
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Information'),
                                                        'url' => ['/user/admin/info', 'id' => $user->id],
                                                        'visible' => Yii::$app->user->can('viewUsers'),
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Assignments'),
                                                        'url' => ['/user/admin/assignments', 'id' => $user->id],
                                                        'visible' => Yii::$app->user->can('assignUserPermissions'),
                                                    ],
                                                    '<hr>',
                                                    [
                                                        'label' => Yii::t('app', 'Confirm'),
                                                        'url' => ['/user/admin/confirm', 'id' => $user->id],
                                                        'visible' => !$user->isConfirmed && Yii::$app->user->can('confirmUsers'),
                                                        'linkOptions' => [
                                                            'class' => 'text-success',
                                                            'data-method' => 'post',
                                                            'data-confirm' => Yii::t(
                                                                'app',
                                                                'Are you sure you want to confirm this user?'
                                                            ),
                                                        ],
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Block'),
                                                        'url' => ['/user/admin/block', 'id' => $user->id],
                                                        'visible' => !$user->isBlocked && Yii::$app->user->can('blockUsers'),
                                                        'linkOptions' => [
                                                            'class' => 'text-danger',
                                                            'data-method' => 'post',
                                                            'data-confirm' => Yii::t(
                                                                'app',
                                                                'Are you sure you want to block this user?'
                                                            ),
                                                        ],
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Unblock'),
                                                        'url' => ['/user/admin/block', 'id' => $user->id],
                                                        'visible' => $user->isBlocked && Yii::$app->user->can('blockUsers'),
                                                        'linkOptions' => [
                                                            'class' => 'text-success',
                                                            'data-method' => 'post',
                                                            'data-confirm' => Yii::t(
                                                                'app',
                                                                'Are you sure you want to unblock this user?'
                                                            ),
                                                        ],
                                                    ],
                                                    [
                                                        'label' => Yii::t('app', 'Delete'),
                                                        'url' => ['/user/admin/delete', 'id' => $user->id],
                                                        'visible' => Yii::$app->user->can('deleteUsers'),
                                                        'linkOptions' => [
                                                            'class' => 'text-danger',
                                                            'data-method' => 'post',
                                                            'data-confirm' => Yii::t(
                                                                'app',
                                                                'Are you sure you want to delete this user?'
                                                            ),
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
                                            <?= $title ?>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <?= $content ?>
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
