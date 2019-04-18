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
            [['Orden', 'idReceta', 'idLentei', 'idAro', 'No_Caja', 'idVenta', 'Entregada', 'idLented'], 'integer'],
            [['Fecha_Entrega', 'Anotaciones'], 'safe'],
            [['Total_orden', 'Preciolentei', 'PrecioVentaAros', 'Preciolented'], 'number'],
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
            'Orden' => $this->Orden,
            'idReceta' => $this->idReceta,
            'idLentei' => $this->idLentei,
            'Fecha_Entrega' => $this->Fecha_Entrega,
            'Total_orden' => $this->Total_orden,
            'idAro' => $this->idAro,
            'No_Caja' => $this->No_Caja,
            'idVenta' => $this->idVenta,
            'Preciolentei' => $this->Preciolentei,
            'PrecioVentaAros' => $this->PrecioVentaAros,
            'Entregada' => $this->Entregada,
            'Preciolented' => $this->Preciolented,
            'idLented' => $this->idLented,
        ]);

        $query->andFilterWhere(['like', 'Anotaciones', $this->Anotaciones]);

        return $dataProvider;
    }
}
