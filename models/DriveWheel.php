<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Привод автомобиля
 *
 * @property int $id
 * @property string $name
 */
class DriveWheel extends ActiveRecord {
    public static function tableName() {
        return 'drive_wheels';
    }
}
