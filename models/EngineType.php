<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Тип двигателя
 *
 * @property int $id
 * @property string $name
 */
class EngineType extends ActiveRecord {
    public static function tableName() {
        return 'engine_types';
    }
}
