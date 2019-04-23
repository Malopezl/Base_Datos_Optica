<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lente_Semiterminado".
 *
 * @property int $idLente_Semiterminado
 * @property string $Tipo_Lente
 * @property int $Graduacion_Base
 * @property string $Material
 * @property double $Precio_Compra
 * @property int $Existencia
 * @property double $Precio_Venta
 *
 * @property DetalleCompra[] $detalleCompras
 * @property DetallesVenta[] $detallesVentas
 */
class LenteSemiterminado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Lente_Semiterminado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Graduacion_Base', 'Existencia'], 'integer'],
            [['Precio_Compra', 'Precio_Venta'], 'number'],
            [['Tipo_Lente'], 'string', 'max' => 45],
            [['Material'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLente_Semiterminado' => Yii::t('app', 'Id Lente Semiterminado'),
            'Tipo_Lente' => Yii::t('app', 'Tipo Lente'),
            'Graduacion_Base' => Yii::t('app', 'Graduacion Base'),
            'Material' => Yii::t('app', 'Material'),
            'Precio_Compra' => Yii::t('app', 'Precio Compra'),
            'Existencia' => Yii::t('app', 'Existencia'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['ID_L_STerminado' => 'idLente_Semiterminado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['idLente_Semiterminado' => 'idLente_Semiterminado']);
    }
}
