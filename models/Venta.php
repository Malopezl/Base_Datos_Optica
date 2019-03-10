<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Venta".
 *
 * @property int $idVenta
 * @property int $ID_Paciente
 * @property int $ID_Orden
 * @property string $Fecha
 * @property string $No_Factura
 * @property double $Total
 * @property double $Adelanto
 *
 * @property DetallesVenta[] $detallesVentas
 * @property Orden $orden
 * @property Cliente $paciente
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
            [['ID_Paciente'], 'required'],
            [['ID_Paciente', 'ID_Orden'], 'integer'],
            [['Fecha'], 'safe'],
            [['Total', 'Adelanto'], 'number'],
            [['No_Factura'], 'string', 'max' => 25],
            [['ID_Orden'], 'exist', 'skipOnError' => true, 'targetClass' => Orden::className(), 'targetAttribute' => ['ID_Orden' => 'idOrden']],
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
            'ID_Orden' => Yii::t('app', 'Id Orden'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'No_Factura' => Yii::t('app', 'No Factura'),
            'Total' => Yii::t('app', 'Total'),
            'Adelanto' => Yii::t('app', 'Adelanto'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['ID_Venta' => 'idVenta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrden()
    {
        return $this->hasOne(Orden::className(), ['idOrden' => 'ID_Orden']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Cliente::className(), ['idPaciente' => 'ID_Paciente']);
    }
}
