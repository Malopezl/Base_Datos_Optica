<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cliente".
 *
 * @property int $idPaciente
 * @property string $Correo_Electronico
 * @property string $Nombre
 * @property string $NIT
 *
 * @property Receta[] $recetas
 * @property Telefono[] $telefonos
 * @property Venta[] $ventas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Correo_Electronico', 'Nombre', 'NIT'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPaciente' => Yii::t('app', 'Id Paciente'),
            'Correo_Electronico' => Yii::t('app', 'Correo Electronico'),
            'Nombre' => Yii::t('app', 'Nombre'),
            'NIT' => Yii::t('app', 'Nit'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetas()
    {
        return $this->hasMany(Receta::className(), ['ID_Paciente' => 'idPaciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefonos()
    {
        return $this->hasMany(Telefono::className(), ['ID_Cliente' => 'idPaciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['ID_Paciente' => 'idPaciente']);
    }
}
