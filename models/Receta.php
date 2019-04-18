<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Receta".
 *
 * @property int $idReceta
 * @property string $Fecha
 * @property int $Esfera_OD
 * @property int $Esfera_OI
 * @property int $Eje_OD
 * @property int $Eje_OI
 * @property int $Cilindro_OD
 * @property int $Cilindro_OI
 * @property string $AdicionOD
 * @property string $AdicionOI
 *
 * @property Orden[] $ordens
 */
class Receta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Receta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha'], 'safe'],
            [['Esfera_OD', 'Esfera_OI', 'Eje_OD', 'Eje_OI', 'Cilindro_OD', 'Cilindro_OI'], 'integer'],
            [['AdicionOD', 'AdicionOI'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idReceta' => Yii::t('app', 'Id Receta'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'Esfera_OD' => Yii::t('app', 'Esfera Ojo Derecho'),
            'Esfera_OI' => Yii::t('app', 'Esfera Ojo Izquierdo'),
            'Eje_OD' => Yii::t('app', 'Eje Ojo Derecho'),
            'Eje_OI' => Yii::t('app', 'Eje Ojo Izquierdo'),
            'Cilindro_OD' => Yii::t('app', 'Cilindro Ojo Derecho'),
            'Cilindro_OI' => Yii::t('app', 'Cilindro Ojo Izquirdo'),
            'AdicionOD' => Yii::t('app', 'Adicion Ojo Derecho'),
            'AdicionOI' => Yii::t('app', 'Adicion Ojo Izquierdo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::className(), ['idReceta' => 'idReceta']);
    }
}
