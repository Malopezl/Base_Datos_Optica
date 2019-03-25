<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detalles_Venta".
 *
 * @property int $ID
 * @property int $ID_Aro
 * @property int $ID_Accessorio
 * @property int $ID_Venta
 * @property int $Cantidad
 * @property double $Precio_Venta
 */
class DetallesVenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detalles_Venta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Aro', 'ID_Accessorio', 'ID_Venta', 'Cantidad'], 'integer'],
            [['ID_Venta'], 'required'],
            [['Precio_Venta'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_Aro' => 'Id Aro',
            'ID_Accessorio' => 'Id Accessorio',
            'ID_Venta' => 'Id Venta',
            'Cantidad' => 'Cantidad',
            'Precio_Venta' => 'Precio Venta',
        ];
    }
}
