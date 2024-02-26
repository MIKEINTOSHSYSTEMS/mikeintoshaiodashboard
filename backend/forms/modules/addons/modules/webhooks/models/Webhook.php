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

namespace app\modules\addons\modules\webhooks\models;

use app\components\behaviors\DateTrait;
use app\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use app\models\Form;

/**
 * This is the model class for table "{{%addon_webhooks}}".
 *
 * @property integer $id
 * @property integer $form_id
 * @property string $url
 * @property string $handshake_key
 * @property integer $status
 * @property integer $json
 * @property integer $alias
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Form $form
 * @property User $author
 * @property User $lastEditor
 */
class Webhook extends ActiveRecord
{
    use DateTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%addon_webhooks}}';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'url'], 'required'],
            [['form_id', 'status', 'json', 'alias', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['url'], 'string', 'max' => 2083],
            [['handshake_key'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'form_id' => Yii::t('app', 'Form'),
            'url' => Yii::t('app', 'Url'),
            'handshake_key' => Yii::t('app', 'Handshake Key'),
            'status' => Yii::t('app', 'Status'),
            'json' => Yii::t('app', 'Json'),
            'alias' => Yii::t('app', 'Alias'),
            'created_by' => Yii::t('app', 'Created by'),
            'updated_by' => Yii::t('app', 'Updated by'),
            'created_at' => Yii::t('app', 'Created at'),
            'updated_at' => Yii::t('app', 'Updated at'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm()
    {
        return $this->hasOne(Form::class, ['id' => 'form_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastEditor()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (empty($this->created_by)) {
            $this->created_by = Yii::$app->user->id;
        }
        $this->updated_by = Yii::$app->user->id;

        if (parent::beforeSave($insert)) {
            return true;
        } else {
            return false;
        }
    }
}