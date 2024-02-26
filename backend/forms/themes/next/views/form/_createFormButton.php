<?php

use app\models\Folder;
use yii\helpers\Html;
use yii\bootstrap5\Dropdown;
use yii\helpers\Url;
use yii\web\View;

/* @var $templateItems array */
/* @var $folderName Folder */

?>
<?php if (Yii::$app->user->can('createForms')) : ?>
    <div class="btn-group">
        <?= Html::a(
            '<span class="fal fa-plus me-3"></span> ' . Yii::t('app', 'Create new form'),
            ['create'], ['class' => 'btn btn-primary']) .
        '<button type="button" 
                 class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                 data-bs-toggle="dropdown" 
                 aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>' .
        Dropdown::widget(['items' => $templateItems, 'options' => ['class' => 'dropdown-menu dropdown-menu-end']])
        ?>
    </div>
<?php endif; ?>
<div id="folders" class="d-inline-block ms-3">
    <span data-toggle="tooltip" data-placement="top" title="<?= Yii::t('app', 'Folder Management') ?>">
        <a href="#" class="text folders mx-2" data-bs-toggle="modal" data-bs-target="#folders-modal"><i class="far fa-folder"></i></a>
    </span>
    <div class="modal fade" id="folders-modal" tabindex="-1" aria-labelledby="folders-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="folders-modal-title"><?= Yii::t('app', 'Folder Management') ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?= Yii::t('app', 'Folders help you organize and filter forms.') ?></p>
                    <div class="card card-body mb-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9">
                                <div class="input-group">
                                    <input x-model="folderName" @keyup.enter="addFolder" id="folder-name" type="text" class="form-control" placeholder="<?= Yii::t('app', 'Folder Name') ?>" aria-label="<?= Yii::t('app', 'Folder Name') ?>" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2" @click="addFolder">
                                        <?= Yii::t('app', 'Add Folder') ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-striped table-vcenter card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <?= Yii::t('app', 'Name') ?>
                                        <span data-toggle="tooltip" data-placement="top" title="<?= Yii::t('app', 'Click on each name to edit it.') ?>" class="">
                                            <i class="fas fa-question-circle"></i>
                                        </span>
                                    </th>
                                    <th class="text-end"><?= Yii::t('app', 'Actions') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <template x-for="(folder, idx) in folders" :key="idx">
                                    <tr>
                                        <td class="folders-column-data">
                                            <span x-show="edit !== folder.id" x-text="folder.name" @click="editFolder(folder, idx)" title="<?= Yii::t('app', 'Click here to edit') ?>"></span>
                                            <input x-show="edit === folder.id" x-model="folder.name" @click.away="saveFolder(folder, idx)" @keyup.enter="saveFolder(folder, idx)" type="text" class="form-control input-sm" />
                                        </td>
                                        <td class="text-end folders-column-actions">
                                            <a @click="deleteFolder(folder, idx)" href="#" class="text-danger folders-delete-link" title="<?= Yii::t('app', 'Delete') ?>">
                                                <i class="far fa-trash-alt"></i>
                                                <?= Yii::t('app', 'Delete') ?>
                                            </a>
                                        </td>
                                    </tr>
                                </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown folders-dropdown" style="display: inline">
        <a href="#" class="dropdown-toggle text text-muted" type="button" id="folders-dropdown-menu" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $folderName ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="folders-dropdown-menu">
            <li><a class="dropdown-item" href="<?= Url::to(['/form']) ?>"><?= Yii::t('app', 'All Forms') ?></a></li>
            <li><a class="dropdown-item" href="<?= Url::to(['/form', 'folder' => 'shared-with-me']) ?>"><?= Yii::t('app', 'Shared with me') ?></a></li>
            <li><a class="dropdown-item" href="<?= Url::to(['/form', 'folder' => 'none']) ?>"><?= Yii::t('app', 'Uncategorized') ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header"><?= Yii::t('app', 'Folders') ?></h6></li>
            <template x-for="(folder, idx) in folders" :key="idx">
                <li class="dropdown-item"><a x-bind:href="'<?= Url::to(['/form', 'folder' => '']) ?>' + folder.id" x-html="folder.name + '<span class=\'float-end\'>' + folder.count + '</span>'" style="width: 100%"></a></li>
            </template>
        </ul>
    </div>
</div>