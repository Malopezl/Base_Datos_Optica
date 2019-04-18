<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orden".
 *
 * @property int $Orden
 * @property int $idReceta
 * @property int $idLentei
 * @property string $Fecha_Entrega
 * @property double $Total_orden
 * @property int $idAro
 * @property string $Anotaciones
 * @property int $No_Caja
 * @property int $idVenta
 * @property double $Preciolentei
 * @property double $PrecioVentaAros
 * @property int $Entregada
 * @property double $Preciolented
 * @property int $idLented
 *
 * @property Aro $aro
 * @property Lente $lentei
 * @property Lente $lented
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
            [['idReceta', 'idLentei', 'idAro', 'No_Caja', 'idVenta', 'Entregada', 'idLented'], 'integer'],
            [['Fecha_Entrega'], 'safe'],
            [['Total_orden', 'Preciolentei', 'PrecioVentaAros', 'Preciolented'], 'number'],
            [['Anotaciones'], 'string'],
            [['idAro'], 'exist', 'skipOnError' => true, 'targetClass' => Aro::className(), 'targetAttribute' => ['idAro' => 'idAro']],
            [['idLentei'], 'exist', 'skipOnError' => true, 'targetClass' => Lente::className(), 'targetAttribute' => ['idLentei' => 'idLente']],
            [['idLented'], 'exist', 'skipOnError' => true, 'targetClass' => Lente::className(), 'targetAttribute' => ['idLented' => 'idLente']],
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
            'idReceta' => Yii::t('app', 'Id Receta'),
            'idLentei' => Yii::t('app', 'Lente Izquierdo'),
            'Fecha_Entrega' => Yii::t('app', 'Fecha Entrega'),
            'Total_orden' => Yii::t('app', 'Total Orden'),
            'idAro' => Yii::t('app', 'Aro'),
            'Anotaciones' => Yii::t('app', 'Anotaciones'),
            'No_Caja' => Yii::t('app', 'No Caja'),
            'idVenta' => Yii::t('app', 'Id Venta'),
            'Preciolentei' => Yii::t('app', 'Precio de Lente Izquierdo'),
            'PrecioVentaAros' => Yii::t('app', 'Precio de Venta del Aro'),
            'Entregada' => Yii::t('app', 'Entregada'),
            'Preciolented' => Yii::t('app', 'Precio de Lente Derecho'),
            'idLented' => Yii::t('app', 'Lente Derecho'),
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
    public function getLentei()
    {
        return $this->hasOne(Lente::className(), ['idLente' => 'idLentei']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLented()
    {
        return $this->hasOne(Lente::className(), ['idLente' => 'idLented']);
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
