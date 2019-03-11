<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Correo".
 *
 * @property int $ID
 * @property string $Correo_Proveedor
 * @property int $ID_Proveedor
 *
 * @property Proveedores $proveedor
 */
class Correo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Correo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Proveedor'], 'required'],
            [['ID_Proveedor'], 'integer'],
            [['Correo_Proveedor'], 'string', 'max' => 45],
            [['ID_Proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['ID_Proveedor' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'Correo_Proveedor' => Yii::t('app', 'Correo Proveedor'),
            'ID_Proveedor' => Yii::t('app', 'Id Proveedor'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['ID' => 'ID_Proveedor']);
    }
}
