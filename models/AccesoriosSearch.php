<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Accesorios;

/**
 * AccesoriosSearch represents the model behind the search form of `app\models\Accesorios`.
 */
class AccesoriosSearch extends Accesorios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAccesorio', 'Existencia'], 'integer'],
            [['Nombre', 'Descripcion'], 'safe'],
            [['Precio_Compra', 'Precio_Venta'], 'number'],
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
        $query = Accesorios::find();

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
            'idAccesorio' => $this->idAccesorio,
            'Precio_Compra' => $this->Precio_Compra,
            'Existencia' => $this->Existencia,
            'Precio_Venta' => $this->Precio_Venta,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
}
