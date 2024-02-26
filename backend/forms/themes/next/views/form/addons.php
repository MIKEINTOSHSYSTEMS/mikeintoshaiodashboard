<?php

use app\helpers\Html;
use baluart\tomselect\TomSelectDropDownList;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $forms array [id => name] of form models */
/* @var $formModel app\models\Form */
/* @var $formID int|null */

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $formModel->name, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Add-Ons');

$url = Url::to(['/addons/admin/get', 'id' => $formID]);
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
                <div id="addons-form-grid" class="grid-view">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">
                                <?= Yii::t('app', 'Add-ons')
                                . ' <small class="ms-3 text-muted hidden-xs">'
                                . Yii::t('app', 'Extend and Expand the functionality of your form')
                                . '</small>'; ?>
                            </h5>
                        </div>
                        <div class="kv-panel-before">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="control-label">
                                        <?= Yii::t('app', 'Select a Form') ?>
                                        <?= Html::a(
                                            Html::tag('span', '', [
                                                'class' => 'fas fa-question-circle',
                                                'style' => '',
                                            ]),
                                            false,
                                            [
                                                'data-bs-toggle' => 'tooltip',
                                                'data-bs-placement'=> 'top',
                                                'data-bs-title' => Yii::t(
                                                    'app',
                                                    'You can select other forms to manage the add-ons configuration faster.'
                                                ),
                                                'class' => '',
                                                'style' => 'color: black; font-size: 12px;'
                                            ]
                                        ) ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= Select2::widget([
                                        'name' => 'forms',
                                        'attribute' => 'forms',
                                        'data' => $forms,
                                        'value' => isset($formModel->id) ? $formModel->id : '',
                                        'options' => ['placeholder' => 'Select a form ...'],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                        'pluginEvents' => [
                                            "select2:select" => "function(e) {
                                            var data = e.params.data;
                                            getAddOns(data.id);
                                        }",
                                            "select2:unselect" => "function(e) {
                                        getAddOns();
                                    }",
                                        ],
                                    ]); ?>
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-primary" href="<?= Url::to(['/addons/admin/index']) ?>">
                                        <?= Yii::t('app', 'Add-Ons Management') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="addons-grid-container" class="kv-grid-container" style="padding: 10px 25px 25px 25px">
                            <div class="row">
                                <div class="col-sm-6">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th><?= Yii::t('app', 'Active Add-Ons') ?></th>
                                        </tr>
                                        </thead>
                                        <tbody id="activeAddons">
                                        <tr>
                                            <td><?= Yii::t('app', 'Loading...') ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th><?= Yii::t('app', 'Available Add-Ons') ?></th>
                                        </tr>
                                        </thead>
                                        <tbody id="availableAddons">
                                        <tr>
                                            <td><?= Yii::t('app', 'Loading...') ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$noResults = "<tr><td>" . Yii::t('app', 'No results found.'). "</td></tr>";

$script = <<<JS

    function addParamToURL(url, param, value){
        url += (url.split('?')[1] ? '&':'?') + param + '=' + value;
        return url;
    }

    function getAddOns(formID = null) {
        var url = formID !== null ? addParamToURL("{$url}", "id", formID) : "{$url}";
        $.ajax({url: url, success: function(result){
            var activeEl = $("#activeAddons");
            var availableEl = $("#availableAddons");
            activeEl.html('');
            availableEl.html('');
            if (result.active.length < 1) {
                activeEl.html('{$noResults}');
            }
            if (result.available.length < 1) {
                availableEl.html('{$noResults}');
            }
            $.each(result.active, function(key, value) {
                $.each(value, function(key, value) {
                    activeEl.append(value.html);                    
                });
            });
            $.each(result.available, function(key, value) {
                availableEl.append(value.html)
            });
        }});
    }

    $(function () {
        $("[data-bs-toggle='tooltip']").tooltip();
    });;

    $(document).ready(function() {
        getAddOns();
    });
JS;

$this->registerJs($script, $this::POS_END);

?>