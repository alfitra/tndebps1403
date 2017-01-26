<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Satker;

/**
 * SatkerSearch represents the model behind the search form about `app\models\Satker`.
 */
class SatkerSearch extends Satker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'parent'], 'integer'],
            [['satker'], 'safe'],
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
        $query = Satker::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'kode' => $this->kode,
            'parent' => $this->parent,
        ]);

        $query->andFilterWhere(['like', 'satker', $this->satker]);

        return $dataProvider;
    }
}
