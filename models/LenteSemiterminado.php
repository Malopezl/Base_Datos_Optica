<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lente_Semiterminado".
 *
 * @property int $idLente_Semiterminado
 * @property string $Tipo_Lente
 * @property int $Graduacion_Base
 * @property string $Material
 * @property double $Precio_Compra
 * @property int $Existencia
 * @property string $Lente_Semiterminadocol
 */
class LenteSemiterminado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Lente_Semiterminado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Graduacion_Base', 'Existencia'], 'integer'],
            [['Precio_Compra'], 'number'],
            [['Tipo_Lente', 'Lente_Semiterminadocol'], 'string', 'max' => 45],
            [['Material'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLente_Semiterminado' => 'Id Lente Semiterminado',
            'Tipo_Lente' => 'Tipo Lente',
            'Graduacion_Base' => 'Graduacion Base',
            'Material' => 'Material',
            'Precio_Compra' => 'Precio Compra',
            'Existencia' => 'Existencia',
            'Lente_Semiterminadocol' => 'Lente Semiterminadocol',
        ];
    }
}
