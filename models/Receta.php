<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Receta".
 *
 * @property int $idReceta
 * @property int $ID_Paciente
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
 * @property Cliente $paciente
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
            [['ID_Paciente'], 'required'],
            [['ID_Paciente', 'Esfera_OD', 'Esfera_OI', 'Eje_OD', 'Eje_OI', 'Cilindro_OD', 'Cilindro_OI'], 'integer'],
            [['Fecha'], 'safe'],
            [['AdicionOD', 'AdicionOI'], 'string', 'max' => 10],
            [['ID_Paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['ID_Paciente' => 'idPaciente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idReceta' => Yii::t('app', 'Id Receta'),
            'ID_Paciente' => Yii::t('app', 'Id Paciente'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'Esfera_OD' => Yii::t('app', 'Esfera Od'),
            'Esfera_OI' => Yii::t('app', 'Esfera Oi'),
            'Eje_OD' => Yii::t('app', 'Eje Od'),
            'Eje_OI' => Yii::t('app', 'Eje Oi'),
            'Cilindro_OD' => Yii::t('app', 'Cilindro Od'),
            'Cilindro_OI' => Yii::t('app', 'Cilindro Oi'),
            'AdicionOD' => Yii::t('app', 'Adicion Od'),
            'AdicionOI' => Yii::t('app', 'Adicion Oi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::className(), ['ID_Receta' => 'idReceta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Cliente::className(), ['idPaciente' => 'ID_Paciente']);
    }
}
