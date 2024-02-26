<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.9.2
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\controllers\user;

use Da\User\Controller\RoleController as BaseController;
use Da\User\Filter\AccessRuleFilter;
use Da\User\Model\AbstractAuthItem;
use Da\User\Model\Role;
use Da\User\Service\AuthItemEditionService;
use Da\User\Validator\AjaxRequestModelValidator;
use Yii;
use yii\filters\AccessControl;

class RoleController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'ruleConfig' => [
                    'class' => AccessRuleFilter::class,
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['manageRoles'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Copy user role
     *
     * @param $name
     * @return \yii\web\Response
     */
    public function actionCopy($name)
    {
        try {
            $authItem = $this->getItem($name);
            $copiedModel = $this->make($this->getModelClass(), [], ['scenario' => 'update', 'item' => $authItem]);

            $model = $this->make($this->getModelClass(), [], ['scenario' => 'create']);
            $model->name = $copiedModel->name . '_copy';
            $model->description = $copiedModel->description;
            $model->rule = $copiedModel->rule;
            $model->children = $copiedModel->children;

            if ($model->validate()) {
                if ($this->make(AuthItemEditionService::class, [$model])->run()) {
                    Yii::$app
                        ->getSession()
                        ->setFlash('success', Yii::t('app', 'Authorization item successfully copied.'));

                    return $this->redirect(['index']);
                }
            }

            Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Unable to copy authorization item.'));

        } catch(\Exception $e) {

            Yii::error($e);
            Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'There was an error copying the authorization item.'));

        }

        return $this->redirect(['index']);
    }

}