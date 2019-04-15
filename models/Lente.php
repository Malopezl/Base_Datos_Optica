<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lente".
 *
 * @property int $idLente
 * @property int $graduacion_base
 * @property string $Graduacion_Ecxedente
 * @property double $Precio_Compra
 * @property double $Precio_Venta
 * @property int $Existencia
 * @property int $Terminado
 * @property string $Tipo
 *
 * @property DetalleCompra[] $detalleCompras
 * @property Orden[] $ordens
 */
class Lente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Lente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['graduacion_base', 'Existencia', 'Terminado'], 'integer'],
            [['Precio_Compra', 'Precio_Venta'], 'number'],
            [['Graduacion_Ecxedente'], 'string', 'max' => 45],
            [['Tipo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLente' => Yii::t('app', 'Id Lente'),
            'graduacion_base' => Yii::t('app', 'Graduacion Base'),
            'Graduacion_Ecxedente' => Yii::t('app', 'Graduacion Ecxedente'),
            'Precio_Compra' => Yii::t('app', 'Precio Compra'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
            'Existencia' => Yii::t('app', 'Existencia'),
            'Terminado' => Yii::t('app', 'Terminado'),
            'Tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['Lente_idLente' => 'idLente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::className(), ['idLente' => 'idLente']);
    }
}
