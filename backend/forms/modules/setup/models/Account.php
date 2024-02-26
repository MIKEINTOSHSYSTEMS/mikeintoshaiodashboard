<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.10
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\setup\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password_hash
 * @property string $last_login_ip
 * @property string $registration_ip
 * @property int $blocked_at
 * @property string $preferences
 * @property string $unconfirmed_email
 * @property int $flags
 * @property int $confirmed_at
 * @property string $auth_tf_key
 * @property int $auth_tf_enabled
 * @property int $password_changed_at
 * @property int $gdpr_consent
 * @property int $gdpr_consent_date
 * @property int $gdpr_deleted
 * @property string $auth_key
 * @property int $last_login_at
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Profile $profile
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password_hash', 'auth_key'], 'required'],
            [['blocked_at', 'flags', 'confirmed_at', 'auth_tf_enabled', 'password_changed_at', 'gdpr_consent', 'gdpr_consent_date', 'gdpr_deleted', 'last_login_at', 'created_at', 'updated_at'], 'integer'],
            [['preferences'], 'string'],
            [['email', 'username', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['last_login_ip', 'registration_ip'], 'string', 'max' => 45],
            [['auth_tf_key'], 'string', 'max' => 16],
            [['auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Username'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'last_login_ip' => Yii::t('app', 'Last Login Ip'),
            'registration_ip' => Yii::t('app', 'Registration Ip'),
            'blocked_at' => Yii::t('app', 'Blocked At'),
            'preferences' => Yii::t('app', 'Preferences'),
            'unconfirmed_email' => Yii::t('app', 'Unconfirmed Email'),
            'flags' => Yii::t('app', 'Flags'),
            'confirmed_at' => Yii::t('app', 'Confirmed At'),
            'auth_tf_key' => Yii::t('app', 'Auth Tf Key'),
            'auth_tf_enabled' => Yii::t('app', 'Auth Tf Enabled'),
            'password_changed_at' => Yii::t('app', 'Password Changed At'),
            'gdpr_consent' => Yii::t('app', 'Gdpr Consent'),
            'gdpr_consent_date' => Yii::t('app', 'Gdpr Consent Date'),
            'gdpr_deleted' => Yii::t('app', 'Gdpr Deleted'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'last_login_at' => Yii::t('app', 'Last Login At'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::class, ['user_id' => 'id']);
    }

}
