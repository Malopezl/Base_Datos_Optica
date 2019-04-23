<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleOrden;

/**
 * DetalleOrdenSearch represents the model behind the search form of `app\models\DetalleOrden`.
 */
class DetalleOrdenSearch extends DetalleOrden
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'ID_Semiterminado', 'ID_Terminado', 'ID_Orden', 'cantidad'], 'integer'],
            [['precio'], 'number'],
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
        $query = DetalleOrden::find();

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
            'ID' => $this->ID,
            'ID_Semiterminado' => $this->ID_Semiterminado,
            'ID_Terminado' => $this->ID_Terminado,
            'ID_Orden' => $this->ID_Orden,
            'precio' => $this->precio,
            'cantidad' => $this->cantidad,
        ]);

        return $dataProvider;
    }
}
