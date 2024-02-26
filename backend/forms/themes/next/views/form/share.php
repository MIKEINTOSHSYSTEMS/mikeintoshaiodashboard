<?php

use app\helpers\IconHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */
/* @var $popupForm app\models\forms\PopupForm */

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $formModel->name, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Embed or Share');

$generatePopupCodeUrl = Url::to(['form/popup-code', 'id' => $formModel->id]);

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
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-1"><?= IconHelper::show('share-3') ?></span>
                            <?= Yii::t('app', 'Embed or Share') ?>
                        </h3>
                    </div>
                    <div class="list-group list-group-flush">
                        <a id="showEmbed" href="#embed" class="list-group-item list-group-item-action active" aria-current="true">
                            <span class="fal fa-code me-2"></span> <?= Yii::t('app', 'Embed Full Form') ?>
                        </a>
                        <a id="showPopUp" href="#popUp" class="list-group-item list-group-item-action">
                            <span class="fal fa-window-alt me-2"></span> <?= Yii::t('app', 'Embed Pop-Up Form') ?>
                        </a>
                        <a id="showLink" href="#link" class="list-group-item list-group-item-action">
                            <span class="fal fa-link me-2"></span> <?= Yii::t('app', 'Share Form Link') ?>
                        </a>
                        <a id="showQrCode" href="#qr" class="list-group-item list-group-item-action">
                            <span class="fal fa-qrcode me-2"></span> <?= Yii::t('app', 'Download QR Code') ?>
                        </a>
                        <a id="showHtml" href="#download" class="list-group-item list-group-item-action">
                            <span class="fal fa-file-download me-2"></span> <?= Yii::t('app', 'Download the HTML') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" id="embed">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-2"><i class="fal fa-code"></i></span>
                            <?= Yii::t('app', 'Embed your form') ?>: <?= Html::encode($formModel->name) ?></h3>
                    </div>
                    <div class="card-body">
                        <p><?= Yii::t('app', 'You have multiple sharing options, the most used is the Embed Code which let you place a form on your website pages. There are two great options, with design or without design. Choose the best for you!') ?></p>
                        <p><?= Yii::t('app', 'To share your form on your own site just use this embed code.') ?></p>
                        <?= $this->render('_embedForm', [
                            'formModel' => $formModel,
                            'formDataModel' => $formDataModel,
                        ]); ?>
                    </div>
                </div>
                <div class="card" id="popUp" style="display: none">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-2"><i class="fal fa-window-alt"></i></span>
                            <?= Yii::t('app', 'Embed Pop-Up Form') ?>: <?= Html::encode($formModel->name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><?= Yii::t('app', 'In this page, you can create popups that will get your visitors attention. With a lot of options and features, it will suit your needs for any popup you want to create.') ?></p>
                        <p style="margin-bottom: 25px"><strong><?= Yii::t('app', 'Fully customizable options like colors, borders, radius, backgrounds, button placements and many more options to make it look awesome in any web page.') ?></strong></p>
                        <?= $this->render('_embedPopUpForm', [
                            'formModel' => $formModel,
                            'formDataModel' => $formDataModel,
                            'popupForm' => $popupForm,
                        ]); ?>
                    </div>
                </div>
                <div class="card" id="link" style="display: none">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-2"><i class="fal fa-link"></i></span>
                            <?= Yii::t('app', 'Share your form link') ?>: <?= Html::encode($formModel->name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><?= Yii::t('app', 'If you don’t want to embed the form on your website but you want to send a link to your users, friends or coworkers then this is the option for you.') ?></p>
                        <p><strong><?= Yii::t('app', 'Sharing has never been easier just copy the direct link below.') ?></strong></p>
                        <?= $this->render('_shareLink', [
                            'formModel' => $formModel,
                            'formDataModel' => $formDataModel,
                        ]); ?>
                    </div>
                </div>
                <div class="card" id="qr" style="display: none">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-2"><i class="fal fa-qrcode"></i></span>
                            <?= Yii::t('app', 'Download QR Code') ?>: <?= Html::encode($formModel->name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><?= Yii::t('app', 'Easily share your form to users on smartphones and other mobile devices.') ?></p>
                        <?= $this->render('_downloadQrCode', [
                            'formModel' => $formModel,
                            'formDataModel' => $formDataModel,
                        ]); ?>
                    </div>
                </div>
                <div class="card" id="download" style="display: none">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="me-2"><i class="fal fa-file-download"></i></span>
                            <?= Yii::t('app', 'Download the HTML') ?>: <?= Html::encode($formModel->name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><?= Yii::t('app', 'Do you need full customization? Download the files to customize the markup or point your external form to our endpoint.') ?></p>
                        <p><strong><?= Yii::t('app', 'Great for designers who want to change the markup or developers who want to collect data with mobile apps.') ?></strong></p>
                        <?= $this->render('_downloadHtml', [
                            'formModel' => $formModel,
                            'formDataModel' => $formDataModel,
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $this->theme->getUrl('assets/libs/nouislider/dist/nouislider.min.js') ?>"></script>
<?php
$copiedText = Yii::t('app', 'Copied');

$script = <<< JS
$( document ).ready(function(){
    $('#showEmbed').on('click', function(e) {
        e.preventDefault();
        history.pushState({}, "", this.href);
        location.hash = 'embed';
        $('#embed').show();
        $('#popUp').hide();
        $('#link').hide();
        $('#qr').hide();
        $('#download').hide();
        $('#showEmbed').addClass('active');
        $('#showPopUp').removeClass('active');
        $('#showLink').removeClass('active');
        $('#showQrCode').removeClass('active');
        $('#showHtml').removeClass('active');
    });
    $('#showPopUp').on('click', function(e) {
        e.preventDefault();
        history.pushState({}, "", this.href);
        location.hash = 'popUp';
        $('#embed').hide();
        $('#popUp').show();
        $('#link').hide();
        $('#qr').hide();
        $('#download').hide();
        $('#showEmbed').removeClass('active');
        $('#showPopUp').addClass('active');
        $('#showLink').removeClass('active');
        $('#showQrCode').removeClass('active');
        $('#showHtml').removeClass('active');
    });
    $('#showLink').on('click', function(e) {
        e.preventDefault();
        history.pushState({}, "", this.href);
        location.hash = 'link';
        $('#embed').hide();
        $('#popUp').hide();
        $('#link').show();
        $('#qr').hide();
        $('#download').hide();
        $('#showEmbed').removeClass('active');
        $('#showPopUp').removeClass('active');
        $('#showLink').addClass('active');
        $('#showQrCode').removeClass('active');
        $('#showHtml').removeClass('active');
    });
    $('#showQrCode').on('click', function(e) {
        e.preventDefault();
        history.pushState({}, "", this.href);
        location.hash = 'qr';
        $('#embed').hide();
        $('#popUp').hide();
        $('#link').hide();
        $('#qr').show();
        $('#download').hide();
        $('#showEmbed').removeClass('active');
        $('#showPopUp').removeClass('active');
        $('#showLink').removeClass('active');
        $('#showQrCode').addClass('active');
        $('#showHtml').removeClass('active');
    });
    $('#showHtml').on('click', function(e) {
        e.preventDefault();
        history.pushState({}, "", this.href);
        location.hash = 'download';
        $('#embed').hide();
        $('#popUp').hide();
        $('#link').hide();
        $('#qr').hide();
        $('#download').show();
        $('#showEmbed').removeClass('active');
        $('#showPopUp').removeClass('active');
        $('#showLink').removeClass('active');
        $('#showQrCode').removeClass('active');
        $('#showHtml').addClass('active');
    });
    $('#generateCode').on('click', function(e) {
        e.preventDefault();
        fetch('{$generatePopupCodeUrl}', {
            method: 'POST',
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: $('form#popup-form').serialize()
        })
            .then(response => response.text())
            .then(function (data) {
                $("#generatedCode").val(data);
            })
            .catch(function (error) {
                console.error('Error:', error);
            });
    });
    $('#withoutDesign').change(function() {
        if($(this).is(":checked")) {
            $('#formUrl').val($('#formUrl').val() + '&t=0');
        } else {
            $('#formUrl').val($('#formUrl').val().replace('&t=0', ''));
        }
    });
    $('#withoutBox').change(function() {
        if($(this).is(":checked")) {
            $('#formUrl').val($('#formUrl').val() + '&b=0');
        } else {
            $('#formUrl').val($('#formUrl').val().replace('&b=0', ''));
        }
    });
    $('#withoutCustomJS').change(function() {
        if($(this).is(":checked")) {
            $('#formUrl').val($('#formUrl').val() + '&js=0');
        } else {
            $('#formUrl').val($('#formUrl').val().replace('&js=0', ''));
        }
    });
    $('#showForm').on('submit', function(e) {
        e.preventDefault();
        window.open($('#formUrl').val());
    });

    $('#withoutBoxAlt').change(function() {
        if($(this).is(":checked")) {
            $('#formUrlAlt').val($('#formUrlAlt').val() + '/0');
        } else {
            $('#formUrlAlt').val($('#formUrlAlt').val().slice(0,-2));
        }
    });
    $('#showFormAlt').on('submit', function(e) {
        e.preventDefault();
        window.open($('#formUrlAlt').val());
    });
    $('#downloadWithoutJS').change(function() {
        var link = $('#downloadHtmlCode');
        if($(this).is(":checked")) {
            link.attr('href', link.attr('href') + '&js=0');
        } else {
            link.attr('href', link.attr('href').replace('&js=0', ''));
        }
    });
    $('#formEndpoint').on('submit', function(e) {
        e.preventDefault();
        /* Get the text field */
        var copyText = document.getElementById("formEndpointUrl");
        copyText.select();
        document.execCommand("copy");
        alert("{$copiedText}");
    });
    // Show panel by url hash embed, popUp, link
    var hash = window.location.hash;
    if (hash === "#popUp") {
        $( "#showPopUp" ).trigger( "click" );
    } else if (hash === "#link") {
        $( "#showLink" ).trigger( "click" );
    } else if (hash === "#embed") {
        $( "#showEmbed" ).trigger( "click" );
    } else if (hash === "#qr") {
        $( "#showQrCode" ).trigger( "click" );
    } else if (hash === "#download") {
        $( "#showHtml" ).trigger( "click" );
    }
})
JS;
$this->registerJs($script, $this::POS_END);
?>