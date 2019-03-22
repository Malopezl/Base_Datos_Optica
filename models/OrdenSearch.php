<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orden;

/**
 * OrdenSearch represents the model behind the search form of `app\models\Orden`.
 */
class OrdenSearch extends Orden
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOrden', 'ID_Receta', 'No_Caja'], 'integer'],
            [['Fecha_Entrega'], 'safe'],
            [['Precio_Total'], 'number'],
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
        $query = Orden::find();

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
            'idOrden' => $this->idOrden,
            'ID_Receta' => $this->ID_Receta,
            'Fecha_Entrega' => $this->Fecha_Entrega,
            'Precio_Total' => $this->Precio_Total,
            'No_Caja' => $this->No_Caja,
        ]);

        return $dataProvider;
    }
}
