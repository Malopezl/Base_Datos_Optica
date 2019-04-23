<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detalles_Venta".
 *
 * @property int $ID
 * @property int $ID_Aro
 * @property int $ID_Accessorio
 * @property int $ID_Venta
 * @property int $Cantidad
 * @property double $Precio_Venta
 * @property int $idLente_Terminado
 * @property int $idLente_Semiterminado
 *
 * @property Accesorios $accessorio
 * @property Aro $aro
 * @property Venta $venta
 * @property LenteSemiterminado $lenteSemiterminado
 * @property LenteTerminado $lenteTerminado
 */
class DetallesVenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detalles_Venta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Aro', 'ID_Accessorio', 'ID_Venta', 'Cantidad', 'idLente_Terminado', 'idLente_Semiterminado'], 'integer'],
            [['Precio_Venta'], 'number'],
            [['ID_Accessorio'], 'exist', 'skipOnError' => true, 'targetClass' => Accesorios::className(), 'targetAttribute' => ['ID_Accessorio' => 'idAccesorio']],
            [['ID_Aro'], 'exist', 'skipOnError' => true, 'targetClass' => Aro::className(), 'targetAttribute' => ['ID_Aro' => 'idAro']],
            [['ID_Venta'], 'exist', 'skipOnError' => true, 'targetClass' => Venta::className(), 'targetAttribute' => ['ID_Venta' => 'idVenta']],
            [['idLente_Semiterminado'], 'exist', 'skipOnError' => true, 'targetClass' => LenteSemiterminado::className(), 'targetAttribute' => ['idLente_Semiterminado' => 'idLente_Semiterminado']],
            [['idLente_Terminado'], 'exist', 'skipOnError' => true, 'targetClass' => LenteTerminado::className(), 'targetAttribute' => ['idLente_Terminado' => 'idLente_Terminado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ID_Aro' => Yii::t('app', 'Id Aro'),
            'ID_Accessorio' => Yii::t('app', 'Id Accessorio'),
            'ID_Venta' => Yii::t('app', 'Id Venta'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'Precio_Venta' => Yii::t('app', 'Precio Venta'),
            'idLente_Terminado' => Yii::t('app', 'Id Lente Terminado'),
            'idLente_Semiterminado' => Yii::t('app', 'Id Lente Semiterminado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccessorio()
    {
        return $this->hasOne(Accesorios::className(), ['idAccesorio' => 'ID_Accessorio']);
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
    public function getVenta()
    {
        return $this->hasOne(Venta::className(), ['idVenta' => 'ID_Venta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLenteSemiterminado()
    {
        return $this->hasOne(LenteSemiterminado::className(), ['idLente_Semiterminado' => 'idLente_Semiterminado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLenteTerminado()
    {
        return $this->hasOne(LenteTerminado::className(), ['idLente_Terminado' => 'idLente_Terminado']);
    }
}
