<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Марка автомобиля
 *
 * @property int $id
 * @property string $name
 *
 * @property-read BrandModel[] $models
 */
class CarBrand extends ActiveRecord {
    public static function tableName() {
        return 'car_brands';
    }

    public function getModels() {
        return $this->hasMany(BrandModel::class, ['brand_id' => 'id'])->inverseOf('brand');
    }
}
