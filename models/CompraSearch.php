<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compra;

/**
 * CompraSearch represents the model behind the search form of `app\models\Compra`.
 */
class CompraSearch extends Compra
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'ID_proveedores', 'Finalizado'], 'integer'],
            [['No_Factura', 'Fecha'], 'safe'],
            [['Monto_Efectivo', 'Credito', 'Total'], 'number'],
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
        $query = Compra::find();

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
            'ID_proveedores' => $this->ID_proveedores,
            'Fecha' => $this->Fecha,
            'Monto_Efectivo' => $this->Monto_Efectivo,
            'Credito' => $this->Credito,
            'Total' => $this->Total,
            'Finalizado' => $this->Finalizado,
        ]);

        $query->andFilterWhere(['like', 'No_Factura', $this->No_Factura]);

        return $dataProvider;
    }
}
