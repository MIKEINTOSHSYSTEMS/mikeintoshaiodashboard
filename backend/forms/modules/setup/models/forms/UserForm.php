<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\setup\models\forms;

use Da\User\Module;
use Yii;
use yii\web\Application;
use yii\web\ServerErrorHttpException;
use yii\base\Model;
use app\modules\setup\models\Account;
use app\modules\setup\models\Profile;
use app\modules\setup\models\Setting;
use Da\User\Helper\SecurityHelper;

/**
 * User form
 */
class UserForm extends Model
{

    // User
    public $email;
    public $username;
    public $password;
    public $status;

    // Profile
    public $language;
    public $timezone;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // general email and username rules
            [['email', 'username'], 'string', 'max' => 255],
            [['email', 'username'], 'filter', 'filter' => 'trim'],
            [['email'], 'email'],
            [['username'], 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => Yii::t('app', '{attribute} can contain only letters, numbers, and "_"')],
            [['email', 'username'], 'required'],
            [['email', 'username'], 'validateUniqueValue'],

            // password rules
            [['password'], 'string', 'min' => 6],
            [['password'], 'filter', 'filter' => 'trim'],
            [['password'], 'required'],

            // profile fields
            [['timezone', 'language'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id'     => Yii::t('app', 'Role ID'),
            'status'      => Yii::t('app', 'Status'),
            'email'       => Yii::t('app', 'Email'),
            'username'    => Yii::t('app', 'Username'),
            'password'    => Yii::t('app', 'Password'),
            'language'    => Yii::t('app', 'Language'),
            'timezone'    => Yii::t('app', 'Timezone'),
        ];
    }

    /**
     * Save an administrator account in database
     *
     * @return bool
     * @throws ServerErrorHttpException
     * @throws \yii\db\Exception
     */
    public function save()
    {
        if ($this->validate()) {

            $transaction = Account::getDb()->beginTransaction();
            try {

                $securityHelper = new SecurityHelper(Yii::$app->security);

                $account = new Account();
                $account->email = $this->email;
                $account->username = $this->username;
                $account->password_hash = $securityHelper->generatePasswordHash($this->password, 10);
                $account->registration_ip = Yii::$app->request->getUserIP();
                $account->auth_key = $securityHelper->generateRandomString();
                $account->created_at = time();
                $account->confirmed_at = time();
                $account->password_changed_at = time();
                $account->save();

                $profile = new Profile();
                $profile->timezone = !empty($this->timezone) ? $this->timezone : null;
                $profile->language = Yii::$app->language;
                $profile->link('account', $account);

                // Assign auth role
                $auth = Yii::$app->authManager;
                $role = $auth->getRole('administrator');
                $auth->assign($role, $account->id);

                $setting = new Setting();
                $setting->type = 'string';
                $setting->category = 'app';
                $setting->key = 'purchaseCode';
                $setting->value = Yii::$app->session->get('purchaseCode', '');
                $setting->status = 1;
                $setting->save();

                $transaction->commit();
            } catch (\Exception $e) {
                // Rolls back the transaction
                $transaction->rollBack();
                // Display a message
                Yii::$app->session->setFlash('danger', Yii::t('app', 'There was an error creating your administrator account, please contact us.'));
                // Log
                Yii::error($e);
                return false;
            }

            return true;
        } else {
            return false;
        }
    }

    /**
     * Verify if the attribute is unique in database
     *
     * @param $attribute
     * @throws ServerErrorHttpException
     */
    public function validateUniqueValue($attribute)
    {
        $oldApp = Yii::$app;
        $webConfigFile = Yii::getAlias('@app/config/web.php');

        if (!file_exists($webConfigFile) || !is_array(($webConfig = require($webConfigFile)))) {
            throw new ServerErrorHttpException('Cannot find `'.
                Yii::getAlias('@app/config/console.php').
                '`. Please create and configure console config.');
        }

        $count = Account::find()
            ->where([$attribute => $this->$attribute])
            ->count();

        if ($count > 0) {
            $this->addError($attribute, Yii::t('app', 'This value has already been taken.'));
        }
    }
}
