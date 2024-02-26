<?php

use yii\helpers\Url;
use app\helpers\UrlHelper;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $submissionModel array */
/* @var $showTheme boolean */
/* @var $showBox boolean */
/* @var $customJS boolean */
/* @var $page int */
/* @var $reset int */

// Home URL
$homeUrl = Url::home(true);

// Base URL without schema
$baseUrl = UrlHelper::removeScheme($homeUrl);

$this->title = $formModel->name;

// Add body background to show box design
if ($showBox) {
    $this->registerCss("body { background-color: #EFF3F6; } iframe { border-radius: 0 0 4px 4px; } ");
} else if ($showTheme && !empty($formModel->theme->css)) {
    // Add theme
    $this->registerCss($formModel->theme->css);
}

// Allow / Disallow Edit a Form Submission
$sid = $submissionModel['id'] ?? 0;
?>
    <?php if ($showBox) : ?>
        <div class="container p-5">
            <div class="row">
                <div class="col-12 col-xl-8 offset-xl-2 col-xll-10 col-xll-1">
                    <div class="form-view">
                        <div class="card">
                            <div class="card-header bg-muted" style="padding: 10px 25px">
                                <h3 class="card-title">
                                    <!-- Brand -->
                                    <?= $this->render('@app/themes/next/views/partials/_brand', [
                                        'brandHeight' => '22px',
                                    ]) ?>
                                </h3>
                            </div>
                            <div class="card-body" style="padding: 0; line-height: 0;">
                                <div id="c<?= $formModel->hashId ?>">
                                    <main class="p-5 d-flex justify-content-center align-items-center flex-wrap">
                                        <div class="spinner-border"></div>
                                    </main>
                                </div>
                                <script type="text/javascript">
                                    (function(d, t) {
                                        var s = d.createElement(t), options = {
                                            'id': '<?= $formModel->hashId ?>',
                                            'sid': <?= $sid ?>,
                                            'page': <?= $page ?>,
                                            'theme': <?= $showTheme ?>,
                                            'customJS': <?= $customJS ?>,
                                            'reset': <?= $reset ?>,
                                            'container': 'c<?= $formModel->hashId ?>',
                                            'height': '<?= $formModel->formData->height ?>px',
                                            'form': '<?= UrlHelper::removeScheme(Url::to(['/app/embed'], true)) ?>'
                                        };
                                        s.type= 'text/javascript';
                                        s.src = '<?= Url::to('@web/static_files/js/form.widget.js', true) ?>';
                                        s.onload = s.onreadystatechange = function() {
                                            var rs = this.readyState; if (rs) if (rs !== 'complete') if (rs !== 'loaded') return;
                                            try { (new EasyForms()).initialize(options).display() } catch (e) { }
                                        };
                                        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                                    })(document, 'script');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
    <div class="container-fluid">
        <div class="row row-no-gutters">
            <div class="col-12">
                <div id="c<?= $formModel->hashId ?>">
                    <main class="p-5 d-flex justify-content-center align-items-center flex-wrap">
                        <div class="spinner-border"></div>
                    </main>
                </div>
                <script type="text/javascript">
                    (function(d, t) {
                        var s = d.createElement(t), options = {
                            'id': '<?= $formModel->hashId ?>',
                            'sid': <?= $sid ?>,
                            'page': <?= $page ?>,
                            'theme': <?= $showTheme ?>,
                            'customJS': <?= $customJS ?>,
                            'reset': <?= $reset ?>,
                            'container': 'c<?= $formModel->hashId ?>',
                            'height': '<?= $formModel->formData->height ?>px',
                            'form': '<?= UrlHelper::removeScheme(Url::to(['/app/embed'], true)) ?>'
                        };
                        s.type= 'text/javascript';
                        s.src = '<?= Url::to('@web/static_files/js/form.widget.js', true) ?>';
                        s.onload = s.onreadystatechange = function() {
                            var rs = this.readyState; if (rs) if (rs !== 'complete') if (rs !== 'loaded') return;
                            try { (new EasyForms()).initialize(options).display() } catch (e) { }
                        };
                        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                    })(document, 'script');
                </script>
            </div>
        </div>
    </div>
    <?php endif; ?>

