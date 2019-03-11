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
 *
 * @property Compra[] $compras
 * @property Correo[] $correos
 * @property Telefono[] $telefonos
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
            [['Direccion', 'Nombre'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['ID_proveedores' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCorreos()
    {
        return $this->hasMany(Correo::className(), ['ID_Proveedor' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefonos()
    {
        return $this->hasMany(Telefono::className(), ['ID_Proveedor' => 'ID']);
    }
}
