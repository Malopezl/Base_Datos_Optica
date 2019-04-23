<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LenteSemiterminado;

/**
 * LenteSemiterminadoSearch represents the model behind the search form of `app\models\LenteSemiterminado`.
 */
class LenteSemiterminadoSearch extends LenteSemiterminado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idLente_Semiterminado', 'Graduacion_Base', 'Existencia'], 'integer'],
            [['Tipo_Lente', 'Material'], 'safe'],
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
        $query = LenteSemiterminado::find();

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
            'idLente_Semiterminado' => $this->idLente_Semiterminado,
            'Graduacion_Base' => $this->Graduacion_Base,
            'Precio_Compra' => $this->Precio_Compra,
            'Existencia' => $this->Existencia,
            'Precio_Venta' => $this->Precio_Venta,
        ]);

        $query->andFilterWhere(['like', 'Tipo_Lente', $this->Tipo_Lente])
            ->andFilterWhere(['like', 'Material', $this->Material]);

        return $dataProvider;
    }
}
