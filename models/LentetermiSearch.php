<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lentetermi;

/**
 * LentetermiSearch represents the model behind the search form of `app\models\Lentetermi`.
 */
class LentetermiSearch extends Lentetermi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idLente_Terminado', 'Existencia'], 'integer'],
            [['Graduacion_Excedente', 'Material', 'Graduacion', 'Tipo_segun_material'], 'safe'],
            [['Precio_Compra'], 'number'],
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
        $query = Lentetermi::find();

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
            'idLente_Terminado' => $this->idLente_Terminado,
            'Precio_Compra' => $this->Precio_Compra,
            'Existencia' => $this->Existencia,
        ]);

        $query->andFilterWhere(['like', 'Graduacion_Excedente', $this->Graduacion_Excedente])
            ->andFilterWhere(['like', 'Material', $this->Material])
            ->andFilterWhere(['like', 'Graduacion', $this->Graduacion])
            ->andFilterWhere(['like', 'Tipo_segun_material', $this->Tipo_segun_material]);

        return $dataProvider;
    }
}
