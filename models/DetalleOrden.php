<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detalle_Orden".
 *
 * @property int $ID
 * @property int $ID_Semiterminado
 * @property int $ID_Terminado
 * @property int $ID_Orden
 * @property double $precio
 * @property int $cantidad
 */
class DetalleOrden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detalle_Orden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Semiterminado', 'ID_Terminado', 'ID_Orden', 'cantidad'], 'integer'],
            [['ID_Orden'], 'required'],
            [['precio'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_Semiterminado' => 'Id Semiterminado',
            'ID_Terminado' => 'Id Terminado',
            'ID_Orden' => 'Id Orden',
            'precio' => 'Precio',
            'cantidad' => 'Cantidad',
        ];
    }
}
