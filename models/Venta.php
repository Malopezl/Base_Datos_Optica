<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Venta".
 *
 * @property int $idVenta
 * @property int $ID_Paciente
 * @property string $Fecha
 * @property string $No_Factura
 * @property double $Total
 * @property int $Entregado
 * @property double $Adelanto
 * @property int $Finalizado
 *
 * @property Orden[] $ordens
 * @property Cliente $paciente
 * @property Ventaaccesorios[] $ventaaccesorios
 */
class Venta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Venta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Paciente', 'Entregado', 'Finalizado'], 'integer'],
            [['Fecha'], 'safe'],
            [['Total', 'Adelanto'], 'number'],
            [['No_Factura'], 'string', 'max' => 25],
            [['ID_Paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['ID_Paciente' => 'idPaciente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idVenta' => Yii::t('app', 'Id Venta'),
            'ID_Paciente' => Yii::t('app', 'Id Paciente'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'No_Factura' => Yii::t('app', 'No Factura'),
            'Total' => Yii::t('app', 'Total'),
            'Entregado' => Yii::t('app', 'Entregado'),
            'Adelanto' => Yii::t('app', 'Adelanto'),
            'Finalizado' => Yii::t('app', 'Finalizado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::className(), ['idVenta' => 'idVenta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Cliente::className(), ['idPaciente' => 'ID_Paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaaccesorios()
    {
        return $this->hasMany(Ventaaccesorios::className(), ['ID_Venta' => 'idVenta']);
    }
}
