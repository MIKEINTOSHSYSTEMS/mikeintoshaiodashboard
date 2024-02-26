<?php

use yii\helpers\Url;
use app\helpers\UrlHelper;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Embed with design:') ?></h3>
    </div>
    <div class="card-body">
        <p><strong>
                <?= Yii::t('app', 'Love the theme you have created? Well, now you can share it with all.') ?>
            </strong></p>
        <p><?= Yii::t(
                'app',
                'To place your form with the theme design on your website just copy and paste the following embed code.'
            ) ?></p>
        <form>
        <textarea class="form-control" rows="3" onfocus="this.select();" onmouseup="return false;"><!-- <?= Yii::$app->settings->get('app.name') ?> -->
<div id="c<?= $formModel->id ?>">
    <?= Yii::t('app', 'Fill out my') ?> <a href="<?= Url::to(['app/form', 'id' => $formModel->hashId], true) ?>"><?= Yii::t('app', 'online form') ?></a>.
</div>
<script type="text/javascript">
    (function(d, t) {
        var s = d.createElement(t), options = {
            'id': '<?= $formModel->hashId ?>',
            'container': 'c<?= $formModel->id ?>',
            'height': '<?= $formDataModel->height ?>px',
            'form': '<?= UrlHelper::removeScheme(Url::to(['/app/embed'], true)) ?>'
        };
        s.type= 'text/javascript';
        s.src = '<?= UrlHelper::removeScheme(Url::to('@web/static_files/js/form.widget.js', true)) ?>';
        s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { (new EasyForms()).initialize(options).display() } catch (e) { }
        };
        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    })(document, 'script');
</script>
<!-- End <?= Yii::$app->settings->get('app.name') ?> --></textarea>
        </form>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'Remember always between the opening and closing &lt;body&gt; tag.') ?>
        </span>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= Yii::t('app', 'Embed without design:') ?></h3>
    </div>
    <div class="card-body">
        <p><strong><?= Yii::t('app', 'Maybe this time you want to share without your theme?') ?></strong></p>
        <p><?= Yii::t('app', 'To place your form without the theme design on your website just copy and paste the following embed code.') ?></p>
        <form>
        <textarea class="form-control" rows="3" onfocus="this.select();" onmouseup="return false;"><!-- <?= Yii::$app->settings->get('app.name') ?> -->
<div id="c<?= $formModel->id ?>">
    <?= Yii::t('app', 'Fill out my') ?> <a href="<?= Url::to(['app/form', 'id' => $formModel->hashId], true) ?>"><?= Yii::t('app', 'online form') ?></a>.
</div>
<script type="text/javascript">
    (function(d, t) {
        var s = d.createElement(t), options = {
            'id': '<?= $formModel->hashId ?>',
            'theme': 0,
            'container': 'c<?= $formModel->id ?>',
            'height': '<?= $formDataModel->height ?>px',
            'form': '<?= UrlHelper::removeScheme(Url::to(['/app/embed'], true)) ?>'
        };
        s.type= 'text/javascript';
        s.src = '<?= UrlHelper::removeScheme(Url::to('@web/static_files/js/form.widget.js', true)) ?>';
        s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { (new EasyForms()).initialize(options).display() } catch (e) { }
        };
        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    })(document, 'script');
</script>
<!-- End <?= Yii::$app->settings->get('app.name') ?> --></textarea>
        </form>
    </div>
    <div class="card-footer">
        <span class="text-muted">
            <?= Yii::t('app', 'Remember always between the opening and closing &lt;body&gt; tag.') ?>
        </span>
    </div>
</div>
