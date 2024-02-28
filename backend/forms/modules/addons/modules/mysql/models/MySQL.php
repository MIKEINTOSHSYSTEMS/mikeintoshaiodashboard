<?php

namespace app\modules\addons\modules\mysql\models;

use app\components\behaviors\DateTrait;
use Yii;
use app\models\Form;
use app\models\User;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use app\components\behaviors\RelationTrait;

/**
 * This is the model class for table "{{%addon_mysql}}".
 *
 * @property integer $id
 * @property integer $form_id
 * @property integer $status
 * @property string $name
 * @property string $conditions
 * @property integer $event
 * @property string $db_host
 * @property integer $db_port
 * @property string $db_name
 * @property string $db_user
 * @property string $db_pass
 * @property string $db_charset
 * @property string $db_table
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Form $form
 * @property MySQLField[] $items
 * @property User $author
 * @property User $lastEditor
 */
class MySQL extends \yii\db\ActiveRecord
{
    use RelationTrait, DateTrait;

    const ON = 1;
    const OFF = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%addon_mysql}}';
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
            BlameableBehavior::class,
            TimestampBehavior::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'form_id', 'db_host', 'db_port', 'db_name', 'db_user', 'db_charset', 'db_table'], 'required'],
            [['form_id', 'status', 'event', 'db_port', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name', 'db_host', 'db_name', 'db_user', 'db_pass', 'db_charset', 'db_table'], 'string', 'max' => 255],
            [['conditions'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'form_id' => Yii::t('app', 'Form ID'),
            'status' => Yii::t('app', 'Status'),
            'name' => Yii::t('app', 'Name'),
            'conditions' => Yii::t('app', 'Conditions'),
            'event' => Yii::t('app', 'Event'),
            'db_host' => Yii::t('app', 'DB Host'),
            'db_port' => Yii::t('app', 'DB Port'),
            'db_name' => Yii::t('app', 'DB Name'),
            'db_user' => Yii::t('app', 'DB User'),
            'db_pass' => Yii::t('app', 'DB Password'),
            'db_charset' => Yii::t('app', 'DB Charset'),
            'db_table' => Yii::t('app', 'DB Table'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(MySQLField::class, ['mysql_id' => 'id']);
    }

    public function setItems($value)
    {
        $this->loadRelated('items', $value);
    }

    /**
     * @inheritdoc
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            MySQLField::deleteAll(["mysql_id" => $this->id]);
            return true;
        } else {
            return false;
        }
    }

}
