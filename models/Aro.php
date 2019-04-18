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
 * @property double $Precio_Compra
 * @property double $Precio_Venta
 * @property string $Codigo
 * @property string $Marca
 *
 * @property Detallecompra[] $detallecompras
 * @property Orden[] $ordens
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
            [['Precio_Compra', 'Precio_Venta'], 'number'],
            [['Color'], 'string', 'max' => 20],
            [['Material', 'Codigo'], 'string', 'max' => 45],
            [['Marca'], 'string', 'max' => 100],
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
            'Precio_Compra' => Yii::t('app', 'Precio Compra'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
            'Codigo' => Yii::t('app', 'Codigo'),
            'Marca' => Yii::t('app', 'Marca'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallecompras()
    {
        return $this->hasMany(Detallecompra::className(), ['ID_Aro' => 'idAro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::className(), ['idAro' => 'idAro']);
    }
}
