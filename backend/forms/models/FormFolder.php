<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%form_folder}}".
 *
 * @property int|null $form_id
 * @property int|null $folder_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Form $form
 */
class FormFolder extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%form_folder}}';
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['form_id', 'folder_id'], 'required'],
            [['form_id', 'folder_id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['form_id', 'folder_id'], 'unique', 'targetAttribute' => ['form_id', 'folder_id'],
                'message' => 'The combination of Form ID and Folder ID has already been taken.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'form_id' => Yii::t('app', 'Form ID'),
            'folder_id' => Yii::t('app', 'Folder ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        // Owner
        if (empty($this->created_by)) {
            $this->created_by = Yii::$app->user->id;
        }

        // Last Editor
        if (!Yii::$app->user->isGuest) {
            $this->updated_by = Yii::$app->user->id;
        }

        if (parent::beforeSave($insert)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[Form]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getForm()
    {
        return $this->hasOne(Form::class, ['id' => 'form_id']);
    }
}
