<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Proveedores".
 *
 * @property int $ID
 * @property string $Direccion
 * @property string $Nombre
 * @property int $NIT
 * @property string $Correo_electronico
 * @property string $Telefono1
 * @property string $Telefono2
 *
 * @property Compra[] $compras
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIT'], 'integer'],
            [['Direccion', 'Nombre', 'Telefono2'], 'string', 'max' => 45],
            [['Correo_electronico'], 'string', 'max' => 100],
            [['Telefono1'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'Direccion' => Yii::t('app', 'Direccion'),
            'Nombre' => Yii::t('app', 'Nombre'),
            'NIT' => Yii::t('app', 'Nit'),
            'Correo_electronico' => Yii::t('app', 'Correo Electronico'),
            'Telefono1' => Yii::t('app', 'Telefono1'),
            'Telefono2' => Yii::t('app', 'Telefono2'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['ID_proveedores' => 'ID']);
    }
}
