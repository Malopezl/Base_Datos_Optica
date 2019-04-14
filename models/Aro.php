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
 * @property string $Codigo
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
            [['Material', 'Codigo'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAro' => Yii::t('app', 'Id Aro'),
            'Color' => Yii::t('app', 'Color'),
            'Existencia' => Yii::t('app', 'Existencia'),
            'Material' => Yii::t('app', 'Material'),
            'Precio_Costo' => Yii::t('app', 'Precio Costo'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
            'Codigo' => Yii::t('app', 'Codigo'),
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
