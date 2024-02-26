<?php

use app\components\widgets\ActiveForm;
use app\helpers\ArrayHelper;
use app\helpers\IconHelper;
use app\models\Theme;
use app\themes\next\bundles\ThemeEditorBundle;
use baluart\tomselect\TomSelectDropDownList;
use kartik\color\ColorInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Theme */
/* @var $forms array [id => name] of form models */
/* @var $users array [id => username] of user models */
/* @var $themeUsers array [id => name] of user models with access to theme model */

ThemeEditorBundle::register($this);

$data = array();

// Set data for select2 widget
foreach ($forms as $form) {
    $key = Url::to(['app/preview', 'id' => $form['id']], true);
    $data[$key] = $form['name'];
}

// Pass php options to javascript
$options = array(
    "css" => "#theme-css",
    "iframe" => "formI",
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    'userListUrl' => Url::to(['/ajax/user-list']),
);
$this->registerJs("var options = ".json_encode($options).";", $this::POS_BEGIN, 'editor-options');

if ($model->isNewRecord) {
    // By default, it's shared with no one
     $model->shared = $model::SHARED_NONE;
}

?>

<div class="theme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Select color ...')],
        'noSupport' => Yii::t('app', 'It is recommended you use an upgraded browser to display the {type} control properly.'),
        'pluginOptions'=> ['preferredFormat' => 'hex']
    ])->hint(Yii::t('app', 'Your theme main color. Value must be a 6 character hex value starting with a "#".')); ?>

    <div class="form-group mb-3">
        <label class="form-label"><?= Yii::t('app', 'Live Preview') ?></label>
        <?php echo Select2::widget([
                'name' => 'preview',
                'data' => $data,
                'options' => [
                    'placeholder' => Yii::t('app', 'Choose a form'),
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ],
                'pluginEvents' => [
                    "select2:select" => "previewSelected",
                    "select2:unselect" => "previewUnselected"
                ]
            ]);
        ?>
    </div>

    <!-- Preview panel -->
    <div class="card mb-3" id="preview-container" style="display:none;">
        <div class="card-header">
            <div class="card-title">
                <strong><?= Yii::t('app', 'Preview') ?></strong>
            </div>
            <div class="card-actions">
                <a id="resizeFull" class="toggleButton" href="javascript:void(0)">
                    <i class="far fa-expand-alt"></i>
                </a>
                <a id="resizeSmall" class="toggleButton" style="display: none" href="javascript:void(0)">
                    <i class="far fa-compress-alt"></i>
                </a>
            </div>
        </div>
        <div class="card-body" id="preview">
        </div>
    </div>

    <?= $form->field($model, 'css', [
        'template' => "{label}
        <div id='editor' class='form-control'></div>
        {input}{error}",
    ])->hiddenInput() ?>

    <?php if (Yii::$app->user->can('changeThemesOwner', ['model' => $model])): ?>
        <?= $form->field($model, 'created_by')
            ->widget(TomSelectDropDownList::class, [
            'items' => array_intersect_key($users, [$model->created_by => $model->created_by]),
            'options' => [
                'create' => false,
                'prompt' => Yii::t('app', "Search user..."),
            ],
            'clientOptions' => [
                'openOnFocus' => false,
                'create' => false,
                'multiple' => false,
                'selectOnTab' => true,
                'onType' => new JsExpression("
                    function(str) {
                        if (str.length < 3) {
                            $(this.dropdown).hide()
                        } else {
                            $(this.dropdown).show()
                        }
                    }"),
                'valueField' => 'id',
                'labelField' => 'username',
                'searchField' => 'username',
                'load' => new JsExpression("
                    function(query, callback) {
                        var url = options.hasPrettyUrls
                            ? options.userListUrl + '?q=' + encodeURIComponent(query)
                            : options.userListUrl + '&q=' + encodeURIComponent(query);
                        fetch(url)
                            .then(function (response) {
                                return response.json();
                            })
                            .then(function (json) {
                                callback(json.items);
                            })
                            .catch(()=>{
                                callback();
                            });
                    }"),
            ],
        ]) ?>
    <?php endif; ?>

    <?php if (Yii::$app->user->can('shareThemes', ['model' => $model])): ?>
        <?= $form->field($model, 'shared')->radioButtonGroup(
            Theme::sharedOptions(),
            [
                'itemOptions' => [
                    'labelOptions' => ['class' => 'btn btn-primary'],
                ],
            ]
        ) ?>

        <?= $form->field($model, 'users')
            ->widget(TomSelectDropDownList::class, [
                'items' => array_intersect_key($users, ArrayHelper::map($model->getUsers()->select(['id'])->asArray()->all(), 'id', 'id')),
                'options' => [
                    'create' => false,
                    'multiple' => true,
                    'prompt' => Yii::t('app', "Search users..."),
                ],
                'clientOptions' => [
                    'openOnFocus' => false,
                    'create' => false,
                    'multiple' => true,
                    'selectOnTab' => true,
                    'onType' => new JsExpression("
                        function(str) {
                            if (str.length < 3) {
                                $(this.dropdown).hide()
                            } else {
                                $(this.dropdown).show()
                            }
                        }"),
                    'valueField' => 'id',
		            'labelField' => 'username',
		            'searchField' => 'username',
		            'load' => new JsExpression("
                        function(query, callback) {
                            var url = '".Url::to(['/ajax/user-list', 'e' => $model->created_by])."&q=' + encodeURIComponent(query);
                            var url = options.hasPrettyUrls
                            ? options.userListUrl + '?q=' + encodeURIComponent(query) + '&e=' + '". $model->created_by ."'
                            : options.userListUrl + '&q=' + encodeURIComponent(query) + '&e=' + '". $model->created_by ."';
                            fetch(url)
                                .then(function (response) {
                                    return response.json();
                                })
                                .then(function (json) {
                                    callback(json.items);
                                })
                                .catch(()=>{
                                    callback();
                                });
                        }"),
                ]
            ])
            ->label(Yii::t('app', 'Users'))
            ->hint(Yii::t('app', 'These users will have access to this theme.')) ?>
    <?php endif; ?>

    <div class="form-group" style="text-align: right; margin-top: 20px">
        <?php if (!$model->isNewRecord): ?>
            <?= Html::submitButton(Yii::t('app', 'Save and continue'), [
                'name' => 'continue',
                'class' => 'btn btn-default',
                'style' => 'margin-right: 5px'
            ]) ?>
        <?php endif; ?>
        <?= Html::submitButton(IconHelper::show('check') . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

    $(document).ready(function(){
        // Handlers
        toggleShared = function (e) {
            if(e.val() === "0" || e.val() === "1") {
                $('.field-theme-users').hide();
            } else if (e.val() === "2") {
                $('.field-theme-users').show();
            }
        };
        $('#theme-shared').find( ".btn" ).on('click', function(e) {
            console.log($(this).prev())
            toggleShared($(this).prev());
        });
        toggleShared($('[name$="Theme[shared]"]:checked'));
    });

JS;

$this->registerJs($script, $this::POS_END);
