<?php

namespace app\modules\addons\modules\mysql\models;

use app\components\User;
use app\helpers\ArrayHelper;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * MySQLSearch represents the model behind the search form about `app\modules\addons\modules\mysql\models\MySQL`.
 */
class MySQLSearch extends MySQL
{

    public $form;
    public $lastEditor;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'form_id', 'status', 'event'], 'integer'],
            [['name', 'form', 'lastEditor'], 'string'],
            [['name', 'form', 'lastEditor', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MySQL::find();

        $query->joinWith(['form', 'lastEditor']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => Yii::$app->user->preferences->get('GridView.pagination.pageSize'),
            ],
            'sort' => [
                'defaultOrder' => [
                    'updated_at' => SORT_DESC,
                ]
            ],
        ]);

        $dataProvider->sort->attributes['form'] = [
            'asc' => ['{{%form}}.name' => SORT_ASC],
            'desc' => ['{{%form}}.name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['lastEditor'] = [
            'asc' => ['{{%user}}.username' => SORT_ASC],
            'desc' => ['{{%user}}.username' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if (isset($this->updated_at) && !empty($this->updated_at)) {
            list($start, $end) = explode(" - ", $this->updated_at);
            $startAt = strtotime(trim($start));
            // Add +1 day to the endAt
            $endAt = strtotime(trim($end)) + (24 * 60 * 60);
            $query->andFilterWhere(['between', '{{%addon_mysql}}.updated_at', $startAt, $endAt]);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'form_id' => $this->form_id,
            '{{%addon_mysql}}.status' => $this->status,
            '{{%addon_mysql}}.event' => $this->event
        ]);

        $query
            ->andFilterWhere(['like', '{{%addon_mysql}}.name', $this->name])
            ->andFilterWhere(['like', '{{%form}}.name', $this->form])
            ->andFilterWhere(['like', '{{%user}}.username', $this->lastEditor]);

        /** @var User $currentUser */
        $currentUser = Yii::$app->user;

        // If current user can see all forms, return data provider
        if ($currentUser->can("viewForms")) {
            return $dataProvider;
        }

        $forms = $currentUser->forms()->asArray()->all();
        $formIds = ArrayHelper::getColumn($forms, 'id');

        // Important restriction. If empty, don't show any configuration
        $formIds = count($formIds) > 0 ? $formIds : 0;
        $query->andFilterWhere(['{{%addon_mysql}}.form_id' => $formIds]);

        return $dataProvider;
    }
}