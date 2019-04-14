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
            [['idVenta', 'ID_Paciente', 'Entregado', 'idReceta'], 'integer'],
            [['Fecha', 'No_Factura', 'No_caja'], 'safe'],
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
            'Fecha' => $this->Fecha,
            'Total' => $this->Total,
            'Entregado' => $this->Entregado,
            'idReceta' => $this->idReceta,
            'Adelanto' => $this->Adelanto,
        ]);

        $query->andFilterWhere(['like', 'No_Factura', $this->No_Factura])
            ->andFilterWhere(['like', 'No_caja', $this->No_caja]);

        return $dataProvider;
    }
}
