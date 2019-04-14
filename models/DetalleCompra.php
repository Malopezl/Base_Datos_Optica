<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detalle_Compra".
 *
 * @property int $ID
 * @property int $ID_Compra
 * @property int $ID_Accesorio
 * @property int $ID_L_Terminado
 * @property int $ID_L_STerminado
 * @property int $ID_Aro
 * @property double $Precio_Compra
 * @property int $Cantidad
 */
class DetalleCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detalle_Compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Compra'], 'required'],
            [['ID_Compra', 'ID_Accesorio', 'ID_L_Terminado', 'ID_L_STerminado', 'ID_Aro', 'Cantidad'], 'integer'],
            [['Precio_Compra'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_Compra' => 'Id Compra',
            'ID_Accesorio' => 'Id Accesorio',
            'ID_L_Terminado' => 'Id L Terminado',
            'ID_L_STerminado' => 'Id L S Terminado',
            'ID_Aro' => 'Id Aro',
            'Precio_Compra' => 'Precio Compra',
            'Cantidad' => 'Cantidad',
        ];
    }
}
