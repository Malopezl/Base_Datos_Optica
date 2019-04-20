<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detallecompra".
 *
 * @property int $ID
 * @property int $ID_Compra
 * @property int $ID_Accesorio
 * @property int $Lente_idLente
 * @property int $ID_Aro
 * @property double $Precio_Compra
 * @property int $Cantidad
 * @property double $Precio_Venta
 *
 * @property Accesorios $accesorio
 * @property Compra $compra
 * @property Aro $aro
 * @property Lente $lenteIdLente
 */
class Detallecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detallecompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Compra'], 'required'],
            [['ID_Compra', 'ID_Accesorio', 'Lente_idLente', 'ID_Aro', 'Cantidad'], 'integer'],
            [['Precio_Compra', 'Precio_Venta'], 'number'],
            [['ID_Accesorio'], 'exist', 'skipOnError' => true, 'targetClass' => Accesorios::className(), 'targetAttribute' => ['ID_Accesorio' => 'idAccesorio']],
            [['ID_Compra'], 'exist', 'skipOnError' => true, 'targetClass' => Compra::className(), 'targetAttribute' => ['ID_Compra' => 'ID']],
            [['ID_Aro'], 'exist', 'skipOnError' => true, 'targetClass' => Aro::className(), 'targetAttribute' => ['ID_Aro' => 'idAro']],
            [['Lente_idLente'], 'exist', 'skipOnError' => true, 'targetClass' => Lente::className(), 'targetAttribute' => ['Lente_idLente' => 'idLente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ID_Compra' => Yii::t('app', 'Id Compra'),
            'ID_Accesorio' => Yii::t('app', 'Id Accesorio'),
            'Lente_idLente' => Yii::t('app', 'Lente Id Lente'),
            'ID_Aro' => Yii::t('app', 'Id Aro'),
            'Precio_Compra' => Yii::t('app', 'Precio Compra'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesorio()
    {
        return $this->hasOne(Accesorios::className(), ['idAccesorio' => 'ID_Accesorio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompra()
    {
        return $this->hasOne(Compra::className(), ['ID' => 'ID_Compra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAro()
    {
        return $this->hasOne(Aro::className(), ['idAro' => 'ID_Aro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLenteIdLente()
    {
        return $this->hasOne(Lente::className(), ['idLente' => 'Lente_idLente']);
    }
}
