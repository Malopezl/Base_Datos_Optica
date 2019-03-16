<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Compra".
 *
 * @property int $ID
 * @property int $ID_proveedores
 * @property string $No_Factura
 * @property string $Fecha
 * @property double $Monto_Efectivo
 * @property double $Credito
 * @property double $Total
 *
 * @property Proveedores $proveedores
 * @property DetalleCompra[] $detalleCompras
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_proveedores'], 'required'],
            [['ID_proveedores'], 'integer'],
            [['Fecha'], 'safe'],
            [['Monto_Efectivo', 'Credito', 'Total'], 'number'],
            [['No_Factura'], 'string', 'max' => 25],
            [['ID_proveedores'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['ID_proveedores' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ID_proveedores' => Yii::t('app', 'Id Proveedores'),
            'No_Factura' => Yii::t('app', 'No Factura'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'Monto_Efectivo' => Yii::t('app', 'Monto Efectivo'),
            'Credito' => Yii::t('app', 'Credito'),
            'Total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasOne(Proveedores::className(), ['ID' => 'ID_proveedores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['ID_Compra' => 'ID']);
    }
}
