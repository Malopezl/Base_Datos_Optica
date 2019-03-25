<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetallesVenta;

/**
 * DetallesVentaSearch represents the model behind the search form of `app\models\DetallesVenta`.
 */
class DetallesVentaSearch extends DetallesVenta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'ID_Aro', 'ID_Accessorio', 'ID_Venta', 'Cantidad'], 'integer'],
            [['Precio_Venta'], 'number'],
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
        $query = DetallesVenta::find();

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
            'ID_Aro' => $this->ID_Aro,
            'ID_Accessorio' => $this->ID_Accessorio,
            'ID_Venta' => $this->ID_Venta,
            'Cantidad' => $this->Cantidad,
            'Precio_Venta' => $this->Precio_Venta,
        ]);

        return $dataProvider;
    }
}
