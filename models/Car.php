<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Автомобиль
 *
 * @property int $id
 * @property int $model_id
 * @property int $engine_type_id
 * @property int $drive_wheel_id
 *
 * @property-read CarBrand $brand
 * @property-read BrandModel $model
 * @property-read EngineType $engineType
 * @property-read DriveWheel $driveWheel
 */
class Car extends ActiveRecord {
    public static function tableName() {
        return 'cars';
    }

    public function getBrand() {
        return $this->hasOne(CarBrand::class, ['id' => 'brand_id'])->via('model');
    }

    public function getModel() {
        return $this->hasOne(BrandModel::class, ['id' => 'model_id']);
    }

    public function getEngineType() {
        return $this->hasOne(EngineType::class, ['id' => 'engine_type_id']);
    }

    public function getDriveWheel() {
        return $this->hasOne(DriveWheel::class, ['id' => 'drive_wheel_id']);
    }
}
