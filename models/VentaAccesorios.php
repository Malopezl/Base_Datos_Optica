<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Venta_Accesorios".
 *
 * @property int $ID
 * @property int $ID_Accessorio
 * @property int $ID_Venta
 * @property int $Cantidad
 * @property double $Precio_Venta
 *
 * @property Accesorios $accessorio
 * @property Venta $venta
 */
class VentaAccesorios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Venta_Accesorios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Accessorio', 'ID_Venta', 'Cantidad'], 'integer'],
            [['Precio_Venta'], 'number'],
            [['ID_Accessorio'], 'exist', 'skipOnError' => true, 'targetClass' => Accesorios::className(), 'targetAttribute' => ['ID_Accessorio' => 'idAccesorio']],
            [['ID_Venta'], 'exist', 'skipOnError' => true, 'targetClass' => Venta::className(), 'targetAttribute' => ['ID_Venta' => 'idVenta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ID_Accessorio' => Yii::t('app', 'Id Accessorio'),
            'ID_Venta' => Yii::t('app', 'Id Venta'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccessorio()
    {
        return $this->hasOne(Accesorios::className(), ['idAccesorio' => 'ID_Accessorio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenta()
    {
        return $this->hasOne(Venta::className(), ['idVenta' => 'ID_Venta']);
    }
}
