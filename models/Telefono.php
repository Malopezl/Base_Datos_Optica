<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Telefono".
 *
 * @property int $ID
 * @property int $Telefono_Proveedor
 * @property int $ID_Proveedor
 * @property int $ID_Cliente
 *
 * @property Proveedores $proveedor
 * @property Cliente $cliente
 */
class Telefono extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Telefono';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Telefono_Proveedor', 'ID_Proveedor', 'ID_Cliente'], 'integer'],
            [['ID_Proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['ID_Proveedor' => 'ID']],
            [['ID_Cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['ID_Cliente' => 'idPaciente/Cliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'Telefono_Proveedor' => Yii::t('app', 'Telefono Proveedor'),
            'ID_Proveedor' => Yii::t('app', 'Id Proveedor'),
            'ID_Cliente' => Yii::t('app', 'Id Cliente'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['ID' => 'ID_Proveedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['idPaciente/Cliente' => 'ID_Cliente']);
    }
}
