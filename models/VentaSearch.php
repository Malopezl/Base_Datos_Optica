<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Venta;

/**
 * VentaSearch represents the model behind the search form of `app\models\Venta`.
 */
class VentaSearch extends Venta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idVenta', 'ID_Paciente', 'ID_Orden'], 'integer'],
            [['Fecha', 'No_Factura'], 'safe'],
            [['Total', 'Adelanto'], 'number'],
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
        $query = Venta::find();

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
            'idVenta' => $this->idVenta,
            'ID_Paciente' => $this->ID_Paciente,
            'ID_Orden' => $this->ID_Orden,
            'Fecha' => $this->Fecha,
            'Total' => $this->Total,
            'Adelanto' => $this->Adelanto,
        ]);

        $query->andFilterWhere(['like', 'No_Factura', $this->No_Factura]);

        return $dataProvider;
    }
}
