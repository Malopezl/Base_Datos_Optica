<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lente_Terminado".
 *
 * @property int $idLente_Terminado
 * @property string $Graduacion_Excedente
 * @property string $Material
 * @property string $Graduacion
 * @property string $Tipo_segun_material
 * @property double $Precio_Compra
 * @property int $Existencia
 * @property double $Precio_Venta
 *
 * @property DetalleCompra[] $detalleCompras
 * @property DetallesVenta[] $detallesVentas
 */
class LenteTerminado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Lente_Terminado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Precio_Compra', 'Precio_Venta'], 'number'],
            [['Existencia'], 'integer'],
            [['Graduacion_Excedente'], 'string', 'max' => 10],
            [['Material', 'Graduacion', 'Tipo_segun_material'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLente_Terminado' => Yii::t('app', 'Id Lente Terminado'),
            'Graduacion_Excedente' => Yii::t('app', 'Graduacion Excedente'),
            'Material' => Yii::t('app', 'Material'),
            'Graduacion' => Yii::t('app', 'Graduacion'),
            'Tipo_segun_material' => Yii::t('app', 'Tipo Segun Material'),
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
        return $this->hasMany(DetalleCompra::className(), ['ID_L_Terminado' => 'idLente_Terminado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['idLente_Terminado' => 'idLente_Terminado']);
    }
}
