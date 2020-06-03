<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Модель брэнда
 *
 * @property int $id
 * @property int $brand_id
 * @property string $name
 *
 * @property-read CarBrand $brand
 */
class BrandModel extends ActiveRecord {
    public static function tableName() {
        return 'brand_models';
    }

    public function getBrand() {
        return $this->hasOne(CarBrand::class, ['id' => 'brand_id'])->inverseOf('models');
    }
}
