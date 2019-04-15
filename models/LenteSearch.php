<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lente;

/**
 * LenteSearch represents the model behind the search form of `app\models\Lente`.
 */
class LenteSearch extends Lente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idLente', 'graduacion_base', 'Existencia', 'Terminado'], 'integer'],
            [['Graduacion_Ecxedente', 'Tipo'], 'safe'],
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
        $query = Lente::find();

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
            'idLente' => $this->idLente,
            'graduacion_base' => $this->graduacion_base,
            'Precio_Compra' => $this->Precio_Compra,
            'Precio_Venta' => $this->Precio_Venta,
            'Existencia' => $this->Existencia,
            'Terminado' => $this->Terminado,
        ]);

        $query->andFilterWhere(['like', 'Graduacion_Ecxedente', $this->Graduacion_Ecxedente])
            ->andFilterWhere(['like', 'Tipo', $this->Tipo]);

        return $dataProvider;
    }
}
