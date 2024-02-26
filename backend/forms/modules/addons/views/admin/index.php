<?php

use app\components\widgets\ActionBar;
use app\components\widgets\GridView;
use app\components\widgets\PageSizeDropDownList;
use app\helpers\Html;
use app\helpers\IconHelper;
use app\modules\addons\models\Addon;
use Carbon\Carbon;
use kartik\datecontrol\Module as DateControlModule;
use kartik\switchinput\SwitchInput;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\addons\models\AddonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Add-ons');
$this->params['breadcrumbs'][] = $this->title;

/** @var kartik\datecontrol\Module $dateControlModule */
$dateControlModule = \Yii::$app->getModule('datecontrol');
$dateFormat = $dateControlModule->displaySettings[DateControlModule::FORMAT_DATE];

Carbon::setLocale(substr(Yii::$app->language, 0, 2)); // eg. en-US to en

$gridColumns = [
    [
        'class' => '\kartik\grid\CheckboxColumn',
        'headerOptions' => ['class'=>'kartik-sheet-style'],
        'rowSelectedClass' => GridView::TYPE_WARNING,
    ],
    [
        'attribute'=> 'name',
        'format' => 'raw',
        'value' => function ($model) {
            if ($model->installed && $model->status) {
                return Html::a(Html::encode($model->name), ['/addons/' . $model->id]);
            }
            return $model->name;
        },
    ],
    [
        'attribute'=>'version',
        'value'=> 'version',
        'visible' => Yii::$app->user->can('installAddons', ['listing' => true]),
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'installed',
        'trueIcon'=>'<span class="text-success">'.IconHelper::show('check').'</span>',
        'falseIcon'=>'<span class="text-danger">'.IconHelper::show('x').'</span>',
        'vAlign'=>'middle',
        'visible' => Yii::$app->user->can('installAddons', ['listing' => true]),
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status',
        'trueIcon'=>'<span class="text-success">'.IconHelper::show('check').'</span>',
        'falseIcon'=>'<span class="text-danger">'.IconHelper::show('x').'</span>',
        'vAlign'=>'middle',
    ],
    [
        'attribute'=>'description',
        'value'=> 'description',
    ],
    [
        'attribute' => 'shared',
        'label' => Yii::t('app', 'Sharing'),
        'format' => 'raw',
        'hAlign'=>'center',
        'value' => function ($model) {
            $icon = '';
            $currentUser = Yii::$app->user;
            if ($currentUser->id === $model->created_by || $currentUser->can('manageAddons')) {
                $icon = Html::tag('span', ' ', [
                    'title' => $currentUser->id === $model->created_by ? Yii::t('app', 'Only you can access to this item') : Yii::t('app', 'Only you and the author can access to this item'),
                    'class' => 'glyphicon glyphicon-lock text-default',
                ]);
                if ((int) $model->shared === \app\modules\addons\models\Addon::SHARED_EVERYONE) {
                    $icon = Html::tag('span', ' ', [
                        'title' => Yii::t('app', 'Everyone can access to this item'),
                        'class' => 'glyphicon glyphicon-unlock text-danger',
                    ]);
                } elseif ((int) $model->shared === \app\modules\addons\models\Addon::SHARED_WITH_USERS) {
                    $icon = Html::tag('span', ' ', [
                        'title' => Yii::t('app', 'Specific users can access to this item'),
                        'class' => 'glyphicon glyphicon-group text-default',
                    ]);
                }
            } else if ($currentUser->id !== $model->created_by) {
                $icon = Html::tag('span', ' ', [
                    'title' => Yii::t('app', 'This item was shared with me'),
                    'class' => 'glyphicon glyphicon-share-alt text-default',
                ]);
            }
            return $icon;
        },
        'filter' => Html::activeDropDownList(
            $searchModel,
            'shared',
            Addon::sharedOptions(),
            ['class'=>'form-control', 'prompt' => '']
        ),
        'visible' => Yii::$app->user->can('shareAddons', ['listing' => true]),
    ],
    [
        'attribute' => 'lastEditor',
        'value' => function ($model) {
            return isset($model->lastEditor, $model->lastEditor->username) ? Html::encode($model->lastEditor->username) : null;
        },
        'label' => Yii::t('app', 'Updated by'),
        'noWrap'=>true,
        'visible' => Yii::$app->user->can('configureAddons', ['listing' => true]),
    ],
    [
        'attribute'=> 'updated_at',
        'value' => function ($model) {
            return $model->updated;
        },
        'label' => Yii::t('app', 'Updated'),
        'noWrap'=>true,
        'filterType'=> GridView::FILTER_DATE_RANGE,
        'filterWidgetOptions' => [
            'presetDropdown' => false,
            'convertFormat' => true,
            'containerTemplate' => '
        <div class="form-control kv-drp-dropdown">
            <i class="glyphicon glyphicon-calendar"></i>&nbsp;
            <span class="range-value">{value}</span>
            <span><b class="caret"></b></span>
        </div>
        {input}
',
            'pluginOptions' => [
                'showDropdowns' => true,
                'locale' => [
                    'format' => 'Y-m-d',
                    'separator' => ' - ',
                ],
                'opens' => 'left'
            ]
        ],
        'visible' => Yii::$app->user->can('configureAddons', ['listing' => true]),
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => true,
        'dropdownButton' => ['class'=>'btn dropdown-toggle align-text-top'],
        'dropdownMenu' => ['class' => 'dropdown-menu dropdown-menu-end'],
        'template' => '{install}{settings}{uninstall}',
        'buttons' => [
            'settings' => function ($url) {
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('settings') . '</span>' . Yii::t('app', 'Settings'),
                        $url,
                        ['title' => Yii::t('app', 'Settings'), 'class' => 'dropdown-item']
                    ) .'</li>';
            },
            'install' => function ($url, $model) {
                $options = array_merge([
                    'title' => Yii::t('app', 'Install'),
                    'class' => 'dropdown-item',
                    'aria-label' => Yii::t('app', 'Install'),
                    'data-method' => 'post',
                    'data-params' => [
                        'ids[]' => $model->id,
                    ],
                    'data-pjax' => '0',
                ], []);
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('plus') . '</span>' .
                        Yii::t('app', 'Install'),
                        $url,
                        $options
                    ).'</li>';
            },
            'uninstall' => function ($url, $model) {
                $options = array_merge([
                    'title' => Yii::t('app', 'Uninstall'),
                    'class' => 'dropdown-item',
                    'aria-label' => Yii::t('app', 'Uninstall'),
                    'data-confirm' => Yii::t('app', 'Are you sure you want to uninstall this add-on? All data related to this item will be deleted. This action cannot be undone.'),
                    'data-method' => 'post',
                    'data-params' => [
                        'ids[]' => $model->id,
                    ],
                    'data-pjax' => '0',
                ], []);
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('trash') . '</span>' .
                        Yii::t('app', 'Uninstall'),
                        $url,
                        $options
                    ).'</li>';
            },
        ],
        'urlCreator' => function ($action, $model) {
            if ($action === "settings") {
                $url = Url::to(['/addons/admin/settings', 'id' => $model->id]);
                return $url;
            } elseif ($action === "install") {
                $url = Url::to(['/addons/admin/install']);
                return $url;
            } elseif ($action === "uninstall") {
                $url = Url::to(['/addons/admin/uninstall']);
                return $url;
            }
        },
        'visibleButtons' => [
            'settings' => function ($model, $key, $index) {
                return Yii::$app->user->can('configureAddons', ['model' => $model]);
            },
            'install' => function ($model) {
                return Yii::$app->user->can('configureAddons', ['model' => $model])
                    && $model->installed === Addon::INSTALLED_OFF;
            },
            'uninstall' => function ($model) {
                return Yii::$app->user->can('configureAddons', ['model' => $model])
                    && $model->installed === Addon::INSTALLED_ON;
            },
        ],
        'visible' => Yii::$app->user->can('configureAddons', ['listing' => true]),
    ],
];

// User Preferences
$showFilters = Yii::$app->user->preferences->get('GridView.filters.state') === '1';

$options = array(
    'currentPage' => Url::toRoute(['index']), // Used by filters
    'gridViewSettingsEndPoint' => Url::to(['/ajax/grid-view-settings']),
);

$bulkActionsItems = [];
if (Yii::$app->user->can('configureAddons')) {
    $bulkActionsItems[Yii::t('app', 'Update Status')] = [
        'status-active' => Yii::t('app', 'Active'),
        'status-inactive' => Yii::t('app', 'Inactive'),
    ];
}
if (Yii::$app->user->can('installAddons')) {
    $bulkActionsItems[Yii::t('app', 'General')]['install'] = Yii::t('app', 'Install');
}
if (Yii::$app->user->can('uninstallAddons')) {
    $bulkActionsItems[Yii::t('app', 'General')]['uninstall'] = Yii::t('app', 'Uninstall');
}
if (empty($bulkActionsItems)) {
    $bulkActionsItems = [
        Yii::t('app', 'General') => [],
    ];
}

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
            <div class="col-md-12">
                <?= GridView::widget([
                    'id' => 'addons-grid',
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => $gridColumns,
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
                        'heading' => Yii::t('app', 'Add-ons')
                            . ' <small class="ms-3 text-muted d-none d-sm-inline">'
                            . Yii::t('app', 'Extend and Expand the functionality of your forms')
                            . ' </small>',
                        'before'=> ActionBar::widget([
                            'grid' => 'addons-grid',
                            'templates' => Yii::$app->user->can('viewBulkActionsInThemes') ? [
                                '{refresh}' => ['class' => 'col-xs-6 col-sm-6'],
                                '{filters}' => ['class' => 'col-xs-6 col-sm-3 col-lg-4'],
                                '{bulk-actions}' => ['class' => 'col-sm-3 col-lg-2 d-none d-sm-block'],
                            ] : [
                                '{refresh}' => ['class' => 'col-xs-6 col-sm-6'],
                                '{filters}' => ['class' => 'col-xs-6 col-sm-6'],
                            ],
                            'bulkActionsItems' => $bulkActionsItems,
                            'bulkActionsOptions' => [
                                'options' => [
                                    'status-active' => [
                                        'url' => Url::toRoute(['update-status', 'status' => 1]),
                                    ],
                                    'status-inactive' => [
                                        'url' => Url::toRoute(['update-status', 'status' => 0]),
                                    ],
                                    'install' => [
                                        'url' => Url::toRoute(['install']),
                                    ],
                                    'uninstall' => [
                                        'url' => Url::toRoute(['uninstall']),
                                        'data-confirm' => Yii::t(
                                            'app',
                                            'Are you sure you want to uninstall these add-ons? All data related to each item will be deleted. This action cannot be undone.'
                                        ),
                                    ],
                                ],
                                'class' => 'form-select',
                            ],
                            'elements' => [
                                'refresh' => Yii::$app->user->can('refreshAddons') ?
                                    Html::a(
                                        Html::tag('span', '', ['class' => 'far fa-sync me-3']).' '.
                                        Yii::t('app', 'Refresh'),
                                        ['refresh'],
                                        ['class' => 'btn btn-primary me-3']
                                    ) .
                                    Html::a(
                                        Html::tag('span', '', [
                                            'class' => 'fas fa-question-circle',
                                            'style' => 'font-size: 18px; color: #6e8292; vertical-align: -3px',
                                        ]),
                                        false,
                                        [
                                            'data-toggle' => 'tooltip',
                                            'data-placement'=> 'top',
                                            'title' => Yii::t(
                                                'app',
                                                'Use the “Refresh” button to see new Add-ons, after upload or delete add-on’s files.'
                                            ),
                                            'class' => 'text hidden-xs hidden-sm'
                                        ]
                                    ) : '',
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
                    'toolbar' => false
                ]); ?>
            </div>
        </div>
    </div>
</div>
<?php
$js = <<< 'SCRIPT'

$(function () {
    $("[data-toggle='tooltip']").tooltip();
});;

SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);