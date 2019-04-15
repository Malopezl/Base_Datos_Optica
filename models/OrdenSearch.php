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
            [['Orden', 'idVenta', 'idReceta', 'idLente', 'idAro', 'No_Caja'], 'integer'],
            [['Cantidad_Lentes', 'Fecha_Entrega', 'Total_orden', 'Anotaciones'], 'safe'],
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
            'idVenta' => $this->idVenta,
            'idReceta' => $this->idReceta,
            'idLente' => $this->idLente,
            'Fecha_Entrega' => $this->Fecha_Entrega,
            'idAro' => $this->idAro,
            'No_Caja' => $this->No_Caja,
        ]);

        $query->andFilterWhere(['like', 'Cantidad_Lentes', $this->Cantidad_Lentes])
            ->andFilterWhere(['like', 'Total_orden', $this->Total_orden])
            ->andFilterWhere(['like', 'Anotaciones', $this->Anotaciones]);

        return $dataProvider;
    }
}
