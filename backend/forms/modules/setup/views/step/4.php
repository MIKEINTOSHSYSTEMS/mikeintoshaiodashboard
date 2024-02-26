<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Installing Easy Forms');

$this->registerJsFile('@web/static_files/js/libs/jquery.progresstimer.min.js', [
        'depends' => \yii\web\JqueryAsset::class,
    ]);
?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Verify Requirements') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Set Up Database') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Install App') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Create Admin Account') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper mb-4">
        <?= Html::tag('h2', Yii::t('app', 'Installing Easy Forms'), ['class' => 'step-title']) ?>
        <div class="loading-progress"></div>
        <div class="form-action">
            <a id="continue" href="<?= Url::to(['5']) ?>" class="btn btn-primary" style="display: none;">
                <?= Yii::t('app', 'Continue') ?>
            </a>
        </div>
    </div>
</div>

<?php

// Please check if your database was successfully installed.
// If not, please import the @local/easy_forms.sql file to your database and continue to the next step.

$homeUrl = Url::home();
$url = Url::to(['4']);
$errorText = Yii::t('app', 'There was an error installing your app, please contact us.');
$successText = Yii::t('app', 'Your app was successfully installed!');

$js = <<<JS
    var progress = $(".loading-progress").progressTimer({
        timeLimit: 240,
        warningThreshold: 210,
        baseStyle: "",
        warningStyle: "bg-danger",
        completeStyle: "",
        onFinish: function () {
            $('#continue').show();
        }
    });

    var successHandler = function () {
        var successText = '$successText';
        var glyph = $('<span></span>').addClass('fas fa-check me-2');
        $(".loading-progress")
        .append($('<p></p>').addClass('text-success mt-3').append(glyph).append(' ' + successText));
        $('#continue').show();
    };

    var errorHandler = function() {
        var errorText = '$errorText';
        var glyph = $('<span></span>').addClass('fas fa-minus-circle me-2');
        $(".loading-progress").append($('<div></div>').addClass('alert alert-danger mt-3').append(glyph).append(' ' + errorText));
    };

    $.ajax({
       url: '$url',
       cache: false
    }).always(function(response) {
        if (typeof response !== 'undefined' && response.success == 1) {
            progress.progressTimer('complete', {
                onFinish: successHandler
            });
        } else {
            $.ajax({
                url: '$homeUrl',
                cache: false
            }).done(function() {
                progress.progressTimer('complete', {
                    onFinish: successHandler
                });
            }).fail(function(){
                progress.progressTimer('error', {
                    errorText: 'ERROR!',
                    onFinish: errorHandler
                });            
            });
        }
    });
JS;

$this->registerJs($js, $this::POS_END, 'progress-bar');
