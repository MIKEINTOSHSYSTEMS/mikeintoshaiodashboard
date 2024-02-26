<?php

use app\models\FormSubmission;
use yii\helpers\Url;

/* @var $submissions FormSubmission[] */

?>
<style>
    .check-icon:hover {
        color: rgba(var(--tblr-primary-rgb),var(--tblr-text-opacity))!important;
    }
</style>
<div id="notification-list" class="list-group list-group-flush list-group-hoverable">
    <?php if (count($submissions) > 0): ?>
        <?php foreach ($submissions as $submission): ?>
        <div class="list-group-item">
            <div class="row align-items-center">
                <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                <div class="col text-truncate">
                    <a href="<?= Url::to(['/form/submissions', 'id' => $submission->form->id, '#' => 'view/' . $submission->id]) ?>" class="text-body d-block" title="<?= $submission->form->name ?>"><?= $submission->form->name ?></a>
                    <div class="d-block text-muted text-truncate mt-n1">
                        <strong title="<?= Yii::t('app', 'New Entry') ?> <?= $submission->created ?>"><?= Yii::t('app', 'New Entry') ?></strong>
                        <small title="<?= Yii::t('app', 'New Entry') ?> <?= $submission->created ?>"><?= $submission->created ?></small>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="<?= Url::to(['/form/submissions', 'id' => $submission->form->id, '#' => 'view/' . $submission->id]) ?>" title="<?= Yii::t('app', 'View Entry') ?>" class="list-group-item-actions mark-as-read">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon check-icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l5 5l10 -10"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="list-group-item disabled">
            <span class="text-nowrap">
                <?= Yii::t('app', 'No unread notifications') ?>
            </span>
        </div>
    <?php endif; ?>
</div>
