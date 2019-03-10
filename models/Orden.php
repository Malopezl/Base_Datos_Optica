<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orden".
 *
 * @property int $idOrden
 * @property int $ID_Receta
 * @property string $Fecha_Entrega
 * @property double $Precio_Total
 * @property int $No_Caja
 *
 * @property DetalleOrden[] $detalleOrdens
 * @property Receta $receta
 * @property Venta[] $ventas
 */
class Orden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Orden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Receta'], 'required'],
            [['ID_Receta', 'No_Caja'], 'integer'],
            [['Fecha_Entrega'], 'safe'],
            [['Precio_Total'], 'number'],
            [['ID_Receta'], 'exist', 'skipOnError' => true, 'targetClass' => Receta::className(), 'targetAttribute' => ['ID_Receta' => 'idReceta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idOrden' => Yii::t('app', 'Id Orden'),
            'ID_Receta' => Yii::t('app', 'Id Receta'),
            'Fecha_Entrega' => Yii::t('app', 'Fecha Entrega'),
            'Precio_Total' => Yii::t('app', 'Precio Total'),
            'No_Caja' => Yii::t('app', 'No Caja'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleOrdens()
    {
        return $this->hasMany(DetalleOrden::className(), ['ID_Orden' => 'idOrden']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceta()
    {
        return $this->hasOne(Receta::className(), ['idReceta' => 'ID_Receta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['ID_Orden' => 'idOrden']);
    }
}
