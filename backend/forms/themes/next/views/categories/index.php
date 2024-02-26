<?php

use app\components\widgets\ActionBar;
use app\components\widgets\GridView;
use app\components\widgets\PageSizeDropDownList;
use app\helpers\IconHelper;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TemplateCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Templates By Categories');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Templates'), 'url' => ['/templates']];
$this->params['breadcrumbs'][] = $this->title;

// User Preferences
$showFilters = Yii::$app->user->preferences->get('GridView.filters.state') === '1';

$options = array(
    'currentPage' => Url::toRoute(['index']), // Used by filters
    'gridViewSettingsEndPoint' => Url::to(['/ajax/grid-view-settings']),
);

// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'form-options');
?>
<div class="template-category-index">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <?= $this->render('@app/themes/next/views/partials/_breadcrumbs', [
                        'brandHeight' => '40px',
                    ]) ?>
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
                        'panel'=>[
                            'type'=>GridView::TYPE_DEFAULT,
                            'headingOptions' => [
                                'class' => 'card-header',
                            ],
                            'footerOptions' => [
                                'class' => 'card-footer d-flex align-items-center',
                            ],
                            'heading'=> Yii::t('app', 'Templates').' <small class="panel-subtitle hidden-xs">'.
                                Yii::t('app', 'By Categories').'</small>',
                            'before'=>
                                ActionBar::widget([
                                    'grid' => 'template-category-grid',
                                    'templates' => Yii::$app->user->can('viewBulkActionsInTemplates') ? [
                                        '{create}' => ['class' => 'col-xs-6 col-sm-6'],
                                        '{filters}' => ['class' => 'col-xs-6 col-sm-3 col-lg-4'],
                                        '{bulk-actions}' => ['class' => 'col-sm-3 col-lg-2 d-none d-sm-block'],
                                    ] : [
                                        '{create}' => ['class' => 'col-xs-6 col-sm-6'],
                                        '{filters}' => ['class' => 'col-xs-6 col-sm-6'],
                                    ],
                                    'bulkActionsItems' => [
                                        Yii::t('app', 'General') => ['general-delete' => Yii::t('app', 'Delete')],
                                    ],
                                    'bulkActionsOptions' => [
                                        'options' => [
                                            'general-delete' => [
                                                'url' => Url::toRoute('delete-multiple'),
                                                'data-confirm' => Yii::t('app', 'Are you sure you want to delete these template categories? All data related to each item will be deleted. This action cannot be undone.'),
                                            ],
                                        ],
                                        'class' => 'form-select',
                                    ],
                                    'elements' => [
                                        'create' =>
                                            Html::a(
                                                IconHelper::show('plus') . ' ' . Yii::t('app', 'Create Template'),
                                                ['create'],
                                                ['class' => 'btn btn-primary']
                                            ) . ' ' .
                                            Html::a(Yii::t('app', 'Need to extend the app functionality?'), ['/addons'], [
                                                'data-bs-toggle' => 'tooltip',
                                                'data-bs-placement'=> 'top',
                                                'data-bs-title' => Yii::t(
                                                    'app',
                                                    'With our add-ons you can add great features and integrations to your forms. Try them now!'
                                                ),
                                                'class' => 'link-secondary text-decoration-underline ms-3 d-none d-md-inline']),
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
                        'toolbar' => false,
                        'columns' => [
                            [
                                'class' => '\kartik\grid\CheckboxColumn',
                                'headerOptions' => ['class'=>'kartik-sheet-style'],
                                'rowSelectedClass' => GridView::TYPE_WARNING,
                            ],
                            [
                                'attribute'=> 'name',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    return Html::a(Html::encode($model->name), ['templates/view', 'id' => $model->id]);
                                },
                            ],
                            [
                                    'attribute' => 'description',
                            ],
                            [
                                'attribute'=> 'updated_at',
                                'value' => function ($model) {
                                    return $model->updated;
                                },
                                'label' => Yii::t('app', 'Updated'),
                                'width' => '150px',
                                'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
                                'filterWidgetOptions' => [
                                    'presetDropdown' => false,
                                    'convertFormat' => true,
                                    'containerTemplate' => '
                                        <div class="form-control kv-drp-dropdown">
                                            '. IconHelper::show('calendar') .'&nbsp;
                                            <span class="range-value">{value}</span>
                                            <span><b class="caret"></b></span>
                                        </div>
                                        {input}
                                    ',
                                    'pluginOptions' => [
                                        'showDropdowns' => true,
                                        'linkedCalendars' => false,
                                        'locale' => [
                                            'format' => 'Y-m-d',
                                            'separator' => ' - ',
                                        ],
                                        'opens' => 'left'
                                    ]
                                ],
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
                                    //view button
                                    'view' => function ($url) {
                                        return '<li>'.Html::a(
                                                '<span class="me-2">' . IconHelper::show('file-info') . '</span>' . Yii::t('app', 'View Record'),
                                                $url,
                                                ['title' => Yii::t('app', 'View Record'), 'class' => 'dropdown-item']
                                            ) .'</li>';
                                    },
                                    //update button
                                    'update' => function ($url) {
                                        return '<li>'.Html::a(
                                                '<span class="me-2">' . IconHelper::show('pencil') . '</span>' . Yii::t('app', 'Update'),
                                                $url,
                                                ['title' => Yii::t('app', 'Update'), 'class' => 'dropdown-item']
                                            ) .'</li>';
                                    },
                                    //delete button
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
                            ],
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
            <div class="kv-panel-pager">
                {pageSize}
                {pager}
            </div>
        ',
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$js = <<< 'SCRIPT'

$(function () {
    $("[data-bs-toggle='tooltip']").tooltip();
});

SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);