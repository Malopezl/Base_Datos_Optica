<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Accesorios".
 *
 * @property int $idAccesorio
 * @property string $Nombre
 * @property string $Descripcion
 * @property double $Precio_Costo
 * @property string $Existencia
 *
 * @property DetalleCompra[] $detalleCompras
 * @property DetallesVenta[] $detallesVentas
 */
class Accesorios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Accesorios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descripcion'], 'string'],
            [['Precio_Costo'], 'number'],
            [['Nombre'], 'string', 'max' => 25],
            [['Existencia'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAccesorio' => 'ID Accesorio',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Precio_Costo' => 'Precio Costo',
            'Existencia' => 'Existencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['ID_Accesorio' => 'idAccesorio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['ID_Accessorio' => 'idAccesorio']);
    }
}
