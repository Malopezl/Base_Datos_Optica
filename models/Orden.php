<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orden".
 *
 * @property int $Orden
 * @property int $idVenta
 * @property int $idReceta
 * @property int $idLente
 * @property string $Cantidad_Lentes
 * @property string $Fecha_Entrega
 * @property string $Total_orden
 * @property int $idAro
 * @property string $Anotaciones
 * @property int $No_Caja
 *
 * @property Aro $aro
 * @property Lente $lente
 * @property Receta $receta
 * @property Venta $venta
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
            [['idVenta', 'idReceta', 'idLente', 'idAro', 'No_Caja'], 'integer'],
            [['Fecha_Entrega'], 'safe'],
            [['Anotaciones'], 'string'],
            [['Cantidad_Lentes', 'Total_orden'], 'string', 'max' => 45],
            [['idAro'], 'exist', 'skipOnError' => true, 'targetClass' => Aro::className(), 'targetAttribute' => ['idAro' => 'idAro']],
            [['idLente'], 'exist', 'skipOnError' => true, 'targetClass' => Lente::className(), 'targetAttribute' => ['idLente' => 'idLente']],
            [['idReceta'], 'exist', 'skipOnError' => true, 'targetClass' => Receta::className(), 'targetAttribute' => ['idReceta' => 'idReceta']],
            [['idVenta'], 'exist', 'skipOnError' => true, 'targetClass' => Venta::className(), 'targetAttribute' => ['idVenta' => 'idVenta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Orden' => Yii::t('app', 'Orden'),
            'idVenta' => Yii::t('app', 'Id Venta'),
            'idReceta' => Yii::t('app', 'Id Receta'),
            'idLente' => Yii::t('app', 'Id Lente'),
            'Cantidad_Lentes' => Yii::t('app', 'Cantidad Lentes'),
            'Fecha_Entrega' => Yii::t('app', 'Fecha Entrega'),
            'Total_orden' => Yii::t('app', 'Total Orden'),
            'idAro' => Yii::t('app', 'Id Aro'),
            'Anotaciones' => Yii::t('app', 'Anotaciones'),
            'No_Caja' => Yii::t('app', 'No Caja'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAro()
    {
        return $this->hasOne(Aro::className(), ['idAro' => 'idAro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLente()
    {
        return $this->hasOne(Lente::className(), ['idLente' => 'idLente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceta()
    {
        return $this->hasOne(Receta::className(), ['idReceta' => 'idReceta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenta()
    {
        return $this->hasOne(Venta::className(), ['idVenta' => 'idVenta']);
    }
}
