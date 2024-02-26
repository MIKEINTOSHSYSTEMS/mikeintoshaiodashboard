<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\setup\controllers;

use app\helpers\FileHelper;
use app\modules\setup\helpers\Setup;
use app\modules\setup\models\forms\DbForm;
use app\modules\setup\models\forms\UserForm;
use Exception;
use Yii;
use yii\helpers\Url;
use yii\httpclient\Client;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\Response;

class StepController extends Controller
{
    public $layout = 'setup';

    private $activatePurchaseCode;

    private $activateDomain;

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        Yii::$app->language = isset(Yii::$app->request->cookies['language']) ?
            (string)Yii::$app->request->cookies['language'] : 'en-US';

        if (!parent::beforeAction($action)) {
            return false;
        }

        if ($this->action->id == '1') {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (Yii::$app->session->has('purchaseCode')) {
                Yii::$app->session->setFlash('warning', Yii::t('app', 'Please enter a valid purchase code'));
                $this->redirect(['step/2']);
                return false;
            }
        }

        $this->activateDomain = Url::home(true);
        $this->activatePurchaseCode = base64_decode(Setup::$purchaseCode);

        return true; // or false to not run the action
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function action1()
    {
        if ($language = Yii::$app->request->post('language')) {

            Yii::$app->language = $language;

            $languageCookie = new Cookie([
                'name' => 'language',
                'value' => $language,
                'expire' => time() + 60 * 60 * 24, // 1 day
            ]);

            Yii::$app->response->cookies->add($languageCookie);

            $purchaseCode = Yii::$app->request->post('purchaseCode', '');

            if (trim($purchaseCode) == '') {
                Yii::$app->session->setFlash('warning', Yii::t('app', 'Please enter a valid purchase code'));
                return $this->redirect(['step/2']);
            }

            try {

                $client = new Client([
                    'transport' => 'yii\httpclient\CurlTransport'
                ]);

                // Send HTTP POST request
                $response = $client->createRequest()
                    ->setMethod('POST')
                    ->setUrl($this->activatePurchaseCode)
                    ->addHeaders(['User-Agent' => Yii::$app->name])
                    ->setData([
                        'purchase_code' => $purchaseCode,
                        'home_url' => $this->activateDomain,
                    ])
                    ->setOptions([
                        CURLOPT_SSL_VERIFYHOST => 0,
                        CURLOPT_SSL_VERIFYPEER => 0
                    ])
                    ->send();

                // Process response
                if ($response->isOk) {
                    $status = $response->data['status'];
                    $message = !empty($response->data['message']) ? $response->data['message'] : '';
                    $homeUrl = !empty($response->data['home_url']) ? $response->data['home_url'] : '';
                    if ($status == 0) {
                        Yii::$app->session->set('purchaseCode', $purchaseCode);
                        if (!empty($message)) {
                            Yii::$app->session->setFlash('success', $message);
                        }
                        return $this->redirect(['step/2']);
                    } elseif ($status == 1) {
                        if (Yii::$app->session->has('purchaseCode')) {
                            Yii::$app->session->remove('purchaseCode');
                        }
                        if (!empty($message)) {
                            Yii::$app->session->setFlash('warning', $message);
                        } elseif (!empty($homeUrl) && $homeUrl != Url::home(true)) {
                            Yii::$app->session->setFlash('warning', Yii::t('app', 'Your license is activated on another site.'));
                        } else {
                            Yii::$app->session->setFlash('warning', Yii::t('app', 'Please enter a valid purchase code'));
                        }
                        return $this->redirect(['step/1']);
                    }
                }

            } catch (Exception $e) {
                Yii::error($e);
                Yii::$app->session->setFlash('warning', Yii::t('app', 'This server does not meet the minimum requirements for installing the software. Please contact us.'));
                return $this->redirect(['step/1']);
            }

        }

        return $this->render('1');
    }

    public function action2()
    {
        return $this->render('2');
    }

    public function action3()
    {
        $dbForm = new DbForm();
        $connectionOk = false;

        if ($dbForm->load(Yii::$app->request->post()) && $dbForm->validate()) {
            if ($dbForm->test()) {
                if (isset($_POST['test'])) {
                    $config = Setup::createDatabaseConfig($dbForm->getAttributes());
                    if (Setup::createDatabaseConfigFile($config) === true) {
                        $connectionOk = true;
                        Yii::$app->session->setFlash('success', Yii::t('app', 'Database connection - ok'));
                    }
                }
                if (isset($_POST['save'])) {
                    $config = Setup::createDatabaseConfig($dbForm->getAttributes());
                    if (Setup::createDatabaseConfigFile($config) === true) {
                        Yii::$app->db->schema->refresh();
                        $tableNames = Yii::$app->db->schema->getTableNames();
                        if (count($tableNames) > 35) {
                            $tableName = Yii::$app->db->tablePrefix . 'auth_assignment'; // Check auth table
                            if (Yii::$app->db->getTableSchema($tableName, true) === null) {
                                Yii::$app->session->setFlash('danger', Yii::t('app', 'Database is not properly installed. Drop all the tables and run this script again.'));
                            } else {
                                Yii::$app->session->setFlash('success', Yii::t('app', 'Database was manually installed.'));
                                return $this->redirect(['step/5']);
                            }
                        } else {
                            return $this->render('4');
                        }
                    } else {
                        Yii::$app->session->setFlash('warning', Yii::t('app', 'Unable to create db config file'));
                    }
                }
            }
        }

        return $this->render('3', ['model' => $dbForm, 'connectionOk' => $connectionOk]);
    }

    /**
     * @throws \Throwable
     */
    public function action4()
    {
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            $result = [
                'success' => 0,
            ];

            // Run SQL file when MySQL is +5.7 and table prefix is empty
            if (version_compare(Yii::$app->db->getServerVersion(),5.7) > -1
                && empty(Yii::$app->db->tablePrefix)) {
                $result = Setup::executeSqlCommands();
            }

            // Check if database was successfully installed
            if (isset($result['success']) && $result['success'] === 0) {
                $result = Setup::runMigrations();
            }

            return $result;
        }

        return '';
    }

    public function action5()
    {
        $userForm = new UserForm();

        if ($userForm->load(Yii::$app->request->post()) && $userForm->save()) {
            return $this->redirect(['step/6']);
        }

        return $this->render('5', [
            'model' => $userForm,
        ]);
    }

    public function action6()
    {
        // With Friendly Urls
        $cronUrl = Url::home(true) . 'cron?cron_key='.Yii::$app->params['App.Cron.cronKey'];

        try {
            $client = new Client();
            $response = $client->get($cronUrl)->send();

            if ($response->getContent() !== '') {
                // Without Friendly Urls
                $url = Url::to([
                    '/cron',
                    'cron_key' => Yii::$app->params['App.Cron.cronKey'],
                ], true);
                $cronUrl = str_replace("install","index", $url);
            }

            // Delete Files and Go to Easy Forms
            if (Yii::$app->request->isPost) {
                if (file_exists('easy_forms.sql')) {
                    FileHelper::unlink('easy_forms.sql');
                }
                if (file_exists('install.php')) {
                    FileHelper::unlink('install.php');
                }
                return $this->goHome();
            }

        } catch (Exception $e) {
            Yii::$app->session->setFlash('warning', $e->getMessage());
            Yii::error($e);
        }

        return $this->render('6', [
            'cronUrl' => $cronUrl
        ]);
    }
}
