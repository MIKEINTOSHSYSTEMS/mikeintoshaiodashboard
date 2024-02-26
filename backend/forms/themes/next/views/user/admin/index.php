<?php

use app\components\widgets\ActionBar;
use app\components\widgets\GridView;
use app\components\widgets\PageSizeDropDownList;
use app\helpers\IconHelper;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/**
 * @var $this         yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $searchModel  Da\User\Search\UserSearch
 * @var $module       Da\User\Module
 */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;

$module = Yii::$app->getModule('user');

// User Preferences
$showFilters = Yii::$app->user->preferences->get('GridView.filters.state') === '1';

$options = array(
    'currentPage' => Url::toRoute(['index']), // Used by filters
    'gridViewSettingsEndPoint' => Url::to(['/ajax/grid-view-settings']),
);

// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'form-options');
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
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col">
            <?= GridView::widget(
                [
                    'id' => 'user-grid',
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'resizableColumns' => false,
                    'pjax' => false,
                    'export' => false,
                    'responsive' => true,
                    'responsiveWrap' => false,
                    'bordered' => false,
                    'striped' => true,
                    'tableOptions' => [
                        'class' => $showFilters
                            ? 'table-with-filters table-vcenter card-table'
                            : 'table-vcenter card-table',
                    ],
                    'panelTemplate' =>'{panelHeading}{panelBefore}{items}{panelFooter}',
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'headingOptions' => [
                            'class' => 'card-header',
                        ],
                        'footerOptions' => [
                            'class' => 'card-footer d-flex align-items-center',
                        ],
                        'heading' => Yii::t('app', 'Users')
                            . ' <small class="ms-3 text-muted d-none d-sm-inline">'
                            . Yii::t('app', 'Authenticate and authorize users in seconds')
                            . '</small>',
                        'before'=>
                            ActionBar::widget([
                                'grid' => 'user-grid',
                                'templates' => Yii::$app->user->can('form-bulk-actions') ? [
                                    '{create}' => ['class' => 'col-xs-9 col-sm-6'],
                                    '{filters}' => ['class' => 'col-xs-3 col-sm-3 col-lg-4'],
                                    '{bulk-actions}' => ['class' => 'col-sm-3 col-lg-2 d-none d-sm-block'],
                                ] : [
                                    '{create}' => ['class' => 'col-xs-9 col-sm-6'],
                                    '{filters}' => ['class' => 'col-xs-3 col-sm-6'],
                                ],
                                'elements' => [
                                    'create' => $this->render('/shared/_menu'),
                                    'filters' => SwitchInput::widget(
                                        [
                                            'name'=>'filters',
                                            'type' => SwitchInput::CHECKBOX,
                                            'value' => $showFilters,
                                            'pluginOptions' => [
                                                'size' => 'mini',
                                                'animate' => false,
                                                'labelText' => Yii::t('app', 'Filter'),
                                            ],
                                            'pluginEvents' => [
                                                "switchChange.bootstrapSwitch" => "function(event, state) {
                                                    var show = (typeof state !== 'undefined' && state == 1) ? 1 : 0;
                                                    $.post(options.gridViewSettingsEndPoint, { 'show-filters': show })
                                                        .done(function(response) {
                                                            if (response.success) {
                                                                if (show) {
                                                                    $('.filters').fadeIn();
                                                                } else {
                                                                    $('.filters').fadeOut();
                                                                    window.location = options.currentPage;
                                                                }                   
                                                            }
                                                        });
                                                }",
                                            ],
                                            'containerOptions' => ['style' => 'margin-top: 6px; text-align: right'],
                                        ]
                                    ),
                                ],
                                'bulkActionsItems' => [
                                    Yii::t('app', 'General') => [
                                        'confirm-multiple' => Yii::t('app', 'Confirm'),
                                        'block-multiple' => Yii::t('app', 'Block / Unblock'),
                                    ]
                                ],
                                'bulkActionsOptions' => [
                                    'options' => [
                                        'confirm-multiple' => [
                                            'url' => Url::toRoute('confirm-multiple'),
                                            'data-confirm' => Yii::t('app', 'Are you sure you want to confirm these users?'),
                                        ],
                                        'block-multiple' => [
                                            'url' => Url::toRoute(['block-multiple']),
                                            'data-confirm' => Yii::t('app', 'Are you sure you want to block / unblock these users?'),
                                        ],
                                    ],
                                    'class' => 'form-select',
                                ],

                                'class' => 'form-control',
                            ]),
                    ],
                    'replaceTags' => [
                        '{pageSize}' => function($widget) {
                            $html = '';
                            if ($widget->panelFooterTemplate !== false) {
                                $selectedSize = Yii::$app->user->preferences->get('GridView.pagination.pageSize');
                                return PageSizeDropDownList::widget(['selectedSize' => $selectedSize]);
                            }
                            return $html;
                        },
                    ],
                    'panelFooterTemplate' => '
                        {pager}{pageSize}
                    ',
                    'toolbar' => false,
                    'columns' => [
                        [
                            'class' => '\kartik\grid\CheckboxColumn',
                            'headerOptions' => ['class'=>'kartik-sheet-style'],
                            'rowSelectedClass' => GridView::TYPE_WARNING,
                        ],
                        'username',
                        'email:email',
    //            [
    //                'attribute' => 'registration_ip',
    //                'value' => function ($model) {
    //                    return $model->registration_ip == null
    //                        ? '<span class="not-set">' . Yii::t('app', '(not set)') . '</span>'
    //                        : $model->registration_ip;
    //                },
    //                'format' => 'html',
    //            ],
                        [
                            'attribute' => 'created_at',
                            'value' => function ($model) {
                                return $model->created;
                            },
                        ],
                        [
                            'attribute' => 'last_login_at',
                            'value' => function ($model) {
                                if (!$model->last_login_at || $model->last_login_at == 0) {
                                    return Yii::t('app', 'Never');
                                }

                                return Yii::$app->formatter->asDatetime($model->last_login_at, $model->getDateTimeFormat());
                            },
                        ],
    //            [
    //                'attribute' => 'last_login_ip',
    //                'value' => function ($model) {
    //                    return $model->last_login_ip == null
    //                        ? '<span class="not-set">' . Yii::t('app', '(not set)') . '</span>'
    //                        : $model->last_login_ip;
    //                },
    //                'format' => 'html',
    //            ],
                        [
                            'header' => Yii::t('app', 'Confirmation'),
                            'value' => function ($model) {
                                if ($model->isConfirmed) {
                                    return '<div class="text-center">
                                    <span class="text-success">' . Yii::t('app', 'Confirmed') . '</span>
                                </div>';
                                }

                                return Html::a(
                                    Yii::t('app', 'Confirm'),
                                    ['confirm', 'id' => $model->id],
                                    [
                                        'class' => 'btn btn-sm btn-success',
                                        'data-method' => 'post',
                                        'data-confirm' => Yii::t('app', 'Are you sure you want to confirm this user?'),
                                    ]
                                );
                            },
                            'format' => 'raw',
                            'visible' => Yii::$app->user->can('confirmUsers'),
                        ],
                        'password_age',
                        [
                            'header' => Yii::t('app', 'Block status'),
                            'value' => function ($model) {
                                if ($model->isBlocked) {
                                    return Html::a(
                                        Yii::t('app', 'Unblock'),
                                        ['block', 'id' => $model->id],
                                        [
                                            'class' => 'btn btn-sm btn-success',
                                            'data-method' => 'post',
                                            'data-confirm' => Yii::t('app', 'Are you sure you want to unblock this user?'),
                                        ]
                                    );
                                }

                                return Html::a(
                                    Yii::t('app', 'Block'),
                                    ['block', 'id' => $model->id],
                                    [
                                        'class' => 'btn btn-sm btn-danger',
                                        'data-method' => 'post',
                                        'data-confirm' => Yii::t('app', 'Are you sure you want to block this user?'),
                                    ]
                                );
                            },
                            'format' => 'raw',
                            'visible' => Yii::$app->user->can('blockUsers'),
                        ],
                        [
                            'class' => 'kartik\grid\ActionColumn',
                            'dropdown' => true,
                            'dropdownButton' => [
                                'class'=>'btn btn-primary',
                                'data-bs-config' => '{"popperConfig":{"strategy":"fixed"}}',
                            ],
                            'dropdownMenu' => [
                                'class' => 'dropdown-menu dropdown-menu-end',
                            ],
                            'buttons' => [
                                'update' => function ($url) {
                                    return '<li>'.Html::a(
                                            '<span class="me-2">' . IconHelper::show('pencil') . '</span>' . Yii::t('app', 'Update'),
                                            $url,
                                            ['title' => Yii::t('app', 'Update'), 'class' => 'dropdown-item']
                                        ) .'</li>';
                                },
                                'switch' => function ($url) {
                                    return '<li>'.Html::a(
                                            '<span class="me-2">' . IconHelper::show('status-change') . '</span>' . Yii::t('app', 'Impersonate'),
                                            $url,
                                            [
                                                'title' => Yii::t('app', 'Impersonate this user'),
                                                'class' => 'dropdown-item',
                                                'data-confirm' => Yii::t(
                                                    'app',
                                                    'Are you sure you want to switch to this user for the rest of this Session?'
                                                ),
                                                'data-method' => 'POST',
                                            ]
                                        ) .'</li>';
                                },
                                'reset' => function ($url) {
                                    return '<li>'.Html::a(
                                            '<span class="me-2">' . IconHelper::show('mail-forward') . '</span>' . Yii::t('app', 'Reset Password'),
                                            $url,
                                            [
                                                'title' => Yii::t('app', 'Send password recovery email'),
                                                'class' => 'dropdown-item',
                                                'data-confirm' => Yii::t(
                                                    'app',
                                                    'Are you sure you wish to send a password recovery email to this user?'
                                                ),
                                                'data-method' => 'POST',
                                            ]
                                        ) .'</li>';
                                },
                                'force-password-change' => function ($url) use ($module) {
                                    return '<li>'.Html::a(
                                            '<i class="fal fa-user-lock me-2"></i> '. Yii::t('app', 'Force Password Change'),
                                            $url,
                                            [
                                                'title' => Yii::t('app', 'Force password change at next login'),
                                                'class' => 'dropdown-item',
                                                'data-confirm' => Yii::t(
                                                    'app',
                                                    'Are you sure you wish the user to change their password at next login?'
                                                ),
                                                'data-method' => 'POST',
                                            ]
                                        ) .'</li>';
                                },
                                'delete' => function ($url) {
                                    $options = array_merge([
                                        'title' => Yii::t('app', 'Delete'),
                                        'aria-label' => Yii::t('app', 'Delete'),
                                        'data-confirm' => Yii::t('app', 'Are you sure you want to delete this item? All data related to this item will be deleted. This action cannot be undone.'),
                                        'data-method' => 'post',
                                        'data-pjax' => '0',
                                        'class' => 'dropdown-item'
                                    ], []);
                                    return '<li>'.Html::a(
                                            '<span class="me-2">' . IconHelper::show('trash') . '</span>' .
                                            Yii::t('app', 'Delete'),
                                            $url,
                                            $options
                                        ).'</li>';
                                },
                            ],
                            'urlCreator' => function ($action, $model) {
                                if ($action === 'update') {
                                    $url = Url::to(['/user/admin/update', 'id' => $model->id]);
                                    return $url;
                                } elseif ($action === 'force-password-change') {
                                    $url = Url::to(['/user/admin/force-password-change', 'id' => $model->id]);
                                    return $url;
                                } elseif ($action === "switch") {
                                    $url = Url::to(['/user/admin/switch-identity', 'id' => $model->id]);
                                    return $url;
                                } elseif ($action === "reset") {
                                    $url = Url::to(['/user/admin/password-reset', 'id' => $model->id]);
                                    return $url;
                                } elseif ($action === "delete") {
                                    $url = Url::to(['/user/admin/delete', 'id' => $model->id]);
                                    return $url;
                                }
                                return '';
                            },
                            'visibleButtons' => [
                                'force-password-change' => function ($model, $key, $index) use ($module) {
                                    return !is_null($module->maxPasswordAge);
                                },
                                'switch' => function ($model, $key, $index) use ($module) {
                                    return Yii::$app->user->can('impersonateUsers');
                                },
                                'reset' => function ($model, $key, $index) use ($module) {
                                    return Yii::$app->user->can('resetUserPasswords');
                                },
                                'update' => function ($model, $key, $index) use ($module) {
                                    return Yii::$app->user->can('updateUsers');
                                },
                                'delete' => function ($model, $key, $index) use ($module) {
                                    return Yii::$app->user->can('deleteUsers');
                                },
                            ],
                            'template' => '{update} {switch} {reset} {force-password-change} {delete}',
                        ],
                    ],
                ]
            ); ?>
            </div>
        </div>
    </div>
</div>

<?php
$js = <<< 'SCRIPT'

$(function () {
    // Tooltips
    $("[data-toggle='tooltip']").tooltip();
});

SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);