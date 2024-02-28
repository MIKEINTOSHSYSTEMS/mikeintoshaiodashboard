<?php

namespace app\modules\addons\modules\mysql\controllers;

use app\components\User;
use app\helpers\ArrayHelper;
use app\helpers\SubmissionHelper;
use app\models\Form;
use app\modules\addons\modules\mysql\models\MySQL;
use app\modules\addons\modules\mysql\models\MySQLField;
use app\modules\addons\modules\mysql\models\MySQLSearch;
use app\modules\addons\modules\mysql\services\MySQLService;
use Exception;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * AdminController implements the CRUD actions for MySQL model.
 */
class AdminController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    ['actions' => ['index', 'fields', 'list-fields'], 'allow' => true, 'roles' => ['configureFormsWithAddons'], 'roleParams' => function() {
                        return ['listing' => true];
                    }],
                    ['actions' => ['create'], 'allow' => true, 'matchCallback' => function ($rule, $action) {
                        if (Yii::$app->request->isGet && Yii::$app->user->can('configureFormsWithAddons', ['listing' => true])) {
                            return true;
                        } else if ($postData = Yii::$app->request->post('MySQL')) {
                            if (isset($postData['form_id'])) {
                                if (is_array($postData['form_id'])) {
                                    return ['modelClass' => Form::class, 'ids' => $postData['form_id']];
                                } else {
                                    return ['model' => Form::findOne(['id' => $postData['form_id']])];
                                }
                            } else {
                                return true; // Allow access. This request is not saving data.
                            }
                        }
                        return false;
                    }],
                    ['actions' => ['view', 'update', 'delete'], 'allow' => true, 'roles' => ['configureFormsWithAddons'], 'roleParams' => function() {
                        $model = $this->findModel(Yii::$app->request->get('id'));
                        return ['model' => $model->form];
                    }],
                    ['actions' => ['update-status', 'delete-multiple'], 'allow' => true, 'roles' => ['configureFormsWithAddons'], 'roleParams' => function() {
                        $models = MySQL::find()
                            ->where(['in', 'id', Yii::$app->request->post('ids')])
                            ->asArray()->all();
                        $ids = ArrayHelper::getColumn($models, 'form_id');
                        return ['modelClass' => Form::class, 'ids' => $ids];
                    }],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'delete-multiple' => [
                'class' => 'app\components\actions\DeleteMultipleAction',
                'modelClass' => 'app\modules\addons\modules\mysql\models\MySQL',
                'afterDeleteCallback' => function () {
                    Yii::$app->getSession()->setFlash(
                        'success',
                        Yii::t('app', 'The selected items have been successfully deleted.')
                    );
                },
            ],
            'fields' => [
                'class' => \kartik\depdrop\DepDropAction::class,
                'outputCallback' => function ($formID, $params) {
                    $output = array();
                    $form = Form::findOne(['id' => $formID]);
                    if ($form) {
                        if (Yii::$app->user->can('configureFormsWithAddons', ['model' => $form])) {
                            $formDataModel = $form->formData;
                            if ($formDataModel) {
                                $fields = $formDataModel->getFieldsForEmail();
                                $fields = SubmissionHelper::getFieldsForFieldMapping($fields);
                                foreach ($fields as $name => $label) {
                                    array_push($output, [
                                        'id' => $name,
                                        'name' => $label,
                                    ]);
                                }
                            }
                        }
                    }
                    return $output;
                },
                'selectedCallback' => function ($formID, $params) {
                    if (isset($params[0]) && !empty($params[0])) {
                        return $params[0];
                    }
                }
            ],
            'list-fields' => [
                'class' => \kartik\depdrop\DepDropAction::class,
                'outputCallback' => function ($db_table, $params) {
                    $output = array();
                    $db_host = null;
                    $db_port = null;
                    $db_name = null;
                    $db_user = null;
                    $db_pass = null;
                    $db_charset = null;
                    $model = MySQL::findOne(['db_table' => $db_table]);
                    if (!empty($model->form)) {
                        if (Yii::$app->user->can('configureFormsWithAddons', ['model' => $model->form])) {
                            $db_host = $model->db_host;
                            $db_port = $model->db_port;
                            $db_name = $model->db_name;
                            $db_user = $model->db_user;
                            $db_pass = $model->db_pass;
                            $db_charset = $model->db_charset;
                        }
                    } else {
                        $session = Yii::$app->session;
                        $db_host = $session['mysql_db_host'];
                        $db_port = $session['mysql_db_port'];
                        $db_name = $session['mysql_db_name'];
                        $db_user = $session['mysql_db_user'];
                        $db_pass = $session['mysql_db_pass'];
                        $db_charset = $session['mysql_db_charset'];
                    }

                    if ($db_host && $db_port && $db_name && $db_user && $db_charset) {
                        $service = new MySQLService(
                            $db_host,
                            $db_port,
                            $db_name,
                            $db_user,
                            $db_pass,
                            $db_charset
                        );
                        $columns = $service->getColumnNames($db_table);
                        foreach ($columns as $name => $label) {
                            array_push($output, [
                                'id' => $name,
                                'name' => $label,
                            ]);
                        }
                    }
                    return $output;
                },
                'selectedCallback' => function ($listID, $params) {
                    if (isset($params[0]) && !empty($params[0])) {
                        return $params[0];
                    }
                }
            ]
        ];
    }

    /**
     * Lists all MySQL models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MySQLSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MySQL model.
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MySQL model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $lists = [];
        $connected = false;
        $model = new MySQL();
        $request = Yii::$app->request;

        if ($request->isPost && $model->load($request->post())) {
            try {
                $session = Yii::$app->session;
                $session['mysql_db_host'] = $model->db_host;
                $session['mysql_db_port'] = $model->db_port;
                $session['mysql_db_name'] = $model->db_name;
                $session['mysql_db_user'] = $model->db_user;
                $session['mysql_db_pass'] = $model->db_pass;
                $session['mysql_db_charset'] = $model->db_charset;

                $service = new MySQLService(
                    $model->db_host,
                    $model->db_port,
                    $model->db_name,
                    $model->db_user,
                    $model->db_pass,
                    $model->db_charset
                );

                $lists = $service->getTableNames();
                $connected = true;

                if ($connected && $model->validate()) {
                    $model->items = Yii::$app->request->post('MySQLField',[]);
                    $model->save(false);
                    Yii::$app->getSession()->setFlash(
                        'success',
                        Yii::t('app', 'The MySQL integration has been successfully configured.')
                    );
                    return $this->redirect(['index']);
                }
            } catch (Exception $e) {
                // Log
                Yii::error($e);
                // Show error message
                Yii::$app->getSession()->setFlash('danger', $e->getMessage());
            }
        }

        /** @var User $currentUser */
        $currentUser = Yii::$app->user;
        $forms = $currentUser->forms()->orderBy('updated_at DESC')->asArray()->all();
        $forms = ArrayHelper::map($forms, 'id', 'name');

        return $this->render('create', [
            'model' => $model,
            'fieldModel' => new MySQLField,
            'forms' => $forms,
            'lists' => $lists,
            'connected' => $connected,
        ]);
    }

    /**
     * Updates an existing MySQL model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $connected = false;
        $lists = [];
        $request = Yii::$app->request;

        if ($model->load($request->post()) && $model->validate()) {
            $items = Yii::$app->request->post('MySQLField',[]);
            if (!empty($items)) {
                $model->items = $items;
            }
            $model->save();
            Yii::$app->getSession()->setFlash(
                'success',
                Yii::t('app', 'The sign up form has been successfully updated.')
            );
            return $this->redirect(['index']);

        }

        try {

            $service = new MySQLService(
                $model->db_host,
                $model->db_port,
                $model->db_name,
                $model->db_user,
                $model->db_pass,
                $model->db_charset
            );

            $lists = $service->getTableNames();
            $connected = true;

        } catch(Exception $e) {
            // Log
            Yii::error($e);
            // Show error message
            Yii::$app->getSession()->setFlash('danger', $e->getMessage());
        }

        /** @var User $currentUser */
        $currentUser = Yii::$app->user;
        $forms = $currentUser->forms()->orderBy('updated_at DESC')->asArray()->all();
        $forms = ArrayHelper::map($forms, 'id', 'name');

        return $this->render('update', [
            'model' => $model,
            'fieldModel' => new MySQLField,
            'forms' => $forms,
            'lists' => $lists,
            'connected' => $connected,
        ]);
    }

    /**
     * Enable / Disable multiple CleverReach models
     *
     * @param $status
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Exception
     */
    public function actionUpdateStatus($status)
    {
        $models = MySQL::findAll(['id' => Yii::$app->getRequest()->post('ids')]);

        if (empty($models)) {
            throw new NotFoundHttpException(Yii::t('app', 'Page not found.'));
        }

        foreach ($models as $model) {
            $model->status = $status;
            $model->update();
        }

        Yii::$app->getSession()->setFlash(
            'success',
            Yii::t('app', 'The selected items have been successfully updated.')
        );

        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing MySQL model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MySQL model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MySQL the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MySQL::findOne(['id' => $id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
