<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Receta;

/**
 * RecetaSearch represents the model behind the search form of `app\models\Receta`.
 */
class RecetaSearch extends Receta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idReceta', 'ID_Paciente', 'Esfera_OD', 'Esfera_OI', 'Eje_OD', 'Eje_OI', 'Cilindro_OD', 'Cilindro_OI'], 'integer'],
            [['Fecha', 'AdicionOD', 'AdicionOI'], 'safe'],
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
        $query = Receta::find();

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
            'idReceta' => $this->idReceta,
            'ID_Paciente' => $this->ID_Paciente,
            'Fecha' => $this->Fecha,
            'Esfera_OD' => $this->Esfera_OD,
            'Esfera_OI' => $this->Esfera_OI,
            'Eje_OD' => $this->Eje_OD,
            'Eje_OI' => $this->Eje_OI,
            'Cilindro_OD' => $this->Cilindro_OD,
            'Cilindro_OI' => $this->Cilindro_OI,
        ]);

        $query->andFilterWhere(['like', 'AdicionOD', $this->AdicionOD])
            ->andFilterWhere(['like', 'AdicionOI', $this->AdicionOI]);

        return $dataProvider;
    }
}
