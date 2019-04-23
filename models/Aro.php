<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Aro".
 *
 * @property int $idAro
 * @property string $Color
 * @property int $Existencia
 * @property string $Material
 * @property double $Precio_Costo
 * @property double $Precio_Venta
 *
 * @property DetalleCompra[] $detalleCompras
 * @property DetallesVenta[] $detallesVentas
 */
class Aro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Aro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Existencia'], 'integer'],
            [['Precio_Costo', 'Precio_Venta'], 'number'],
            [['Color'], 'string', 'max' => 20],
            [['Material'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAro' => 'Id Aro',
            'Color' => 'Color',
            'Existencia' => 'Existencia',
            'Material' => 'Material',
            'Precio_Costo' => 'Precio Costo',
            'Precio_Venta' => 'Precio Venta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['ID_Aro' => 'idAro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['ID_Aro' => 'idAro']);
    }
}
