<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aro;

/**
 * AroSearch represents the model behind the search form of `app\models\Aro`.
 */
class AroSearch extends Aro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAro', 'Existencia'], 'integer'],
            [['Color', 'Material', 'Codigo'], 'safe'],
            [['Precio_Costo', 'Precio_Venta'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Aro::find();

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
            'idAro' => $this->idAro,
            'Existencia' => $this->Existencia,
            'Precio_Costo' => $this->Precio_Costo,
            'Precio_Venta' => $this->Precio_Venta,
        ]);

        $query->andFilterWhere(['like', 'Color', $this->Color])
            ->andFilterWhere(['like', 'Material', $this->Material])
            ->andFilterWhere(['like', 'Codigo', $this->Codigo]);

        return $dataProvider;
    }
}
