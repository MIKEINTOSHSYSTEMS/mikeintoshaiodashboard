<?php

namespace app\models;

use app\components\behaviors\DateTrait;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "folder".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property User $author
 * @property User $lastEditor
 * @property FormFolder[] $folderForms
 * @property Folder[] $forms
 */
class Folder extends \yii\db\ActiveRecord
{

    use DateTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%folder}}';
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        return [
            'id',
            'name',
            'description',
            'status',
            'count',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
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
     * @inheritdoc
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {

            FormFolder::deleteAll(["folder_id" => $this->id]);

            return true;
        } else {
            return false;
        }
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
     * @return \yii\db\ActiveQuery
     */
    public function getFolderForms()
    {
        return $this->hasMany(FormFolder::class, ['folder_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForms()
    {
        return $this->hasMany(Form::class, ['id' => 'form_id'])
            ->via('folderForms');
    }

    /**
     * Return the number of forms belongs to this folder
     *
     * @return int
     */
    public function getCount()
    {
        return $this->getForms()->count();
    }
}
