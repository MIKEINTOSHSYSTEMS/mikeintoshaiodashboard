<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Updating Easy Forms');

$this->registerJsFile('@web/static_files/js/libs/jquery.progresstimer.min.js', [
        'depends' => \yii\web\JqueryAsset::class,
    ]);
?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Requirements') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Update app') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h2', Yii::t('app', 'Updating Easy Forms'), ['class' => 'step-title']) ?>
        <div class="loading-progress"></div>
        <div class="form-action">
            <a id="continue" href="<?= Url::to(['5']) ?>" class="btn btn-primary" style="display: none;">
                <?= Yii::t('app', 'Continue') ?>
            </a>
        </div>
    </div>
</div>

<?php

$url = Url::to(['4']);
$errorText = Yii::t('app', 'There was an error updating your database, please contact us.');
$successText = Yii::t('app', 'Your application was successfully updated!');

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
    }).done(function(response){
        if (response.success == 1) {
            progress.progressTimer('complete', {
                onFinish: successHandler
            });
        } else {
            progress.progressTimer('error', {
                errorText: 'ERROR!',
                onFinish: errorHandler
            });
        }
    }).fail(function(){
        progress.progressTimer('error', {
            errorText: 'ERROR!',
            onFinish: errorHandler
        });
    });
JS;

$this->registerJs($js, $this::POS_END, 'progress-bar');
