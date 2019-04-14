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
 * @property string $No_caja
 * @property int $idReceta
 * @property double $Adelanto
 *
 * @property DetallesVenta[] $detallesVentas
 * @property Cliente $paciente
 * @property Receta $receta
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
            [['ID_Paciente', 'Entregado', 'idReceta'], 'integer'],
            [['Fecha'], 'safe'],
            [['Total', 'Adelanto'], 'number'],
            [['No_Factura'], 'string', 'max' => 25],
            [['No_caja'], 'string', 'max' => 45],
            [['ID_Paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['ID_Paciente' => 'idPaciente']],
            [['idReceta'], 'exist', 'skipOnError' => true, 'targetClass' => Receta::className(), 'targetAttribute' => ['idReceta' => 'idReceta']],
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
            'No_caja' => Yii::t('app', 'No Caja'),
            'idReceta' => Yii::t('app', 'Id Receta'),
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
    public function getPaciente()
    {
        return $this->hasOne(Cliente::className(), ['idPaciente' => 'ID_Paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceta()
    {
        return $this->hasOne(Receta::className(), ['idReceta' => 'idReceta']);
    }
}
