<?php

namespace app\modules\addons\modules\mysql\models;

use Yii;

/**
 * This is the model class for table "{{%addon_mysql_field}}".
 *
 * @property integer $id
 * @property integer $mysql_id
 * @property integer $form_id
 * @property string $form_field
 * @property string $table_column
 */
class MySQLField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%addon_mysql_field}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mysql_id', 'form_id'], 'integer'],
            [['form_field', 'table_column'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'mysql_id' => Yii::t('app', 'MySQL ID'),
            'form_id' => Yii::t('app', 'Form ID'),
            'form_field' => Yii::t('app', 'Form Field'),
            'table_column' => Yii::t('app', 'Table Column'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMySQL()
    {
        return $this->hasOne(MySQL::class,['mysql_id'=>'id']);
    }
}
