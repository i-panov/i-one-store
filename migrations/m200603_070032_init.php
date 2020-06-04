<?php

use yii\db\Migration;
use yii\db\Query;

/**
 * Class m200603_070032_init
 */
class m200603_070032_init extends Migration {
    const FIXTURES = [
        'engine_types' => [
            ['id' => 1, 'name' => 'Бензин'],
            ['id' => 2, 'name' => 'Дизель'],
            ['id' => 3, 'name' => 'Гибрид'],
        ],
        'drive_wheels' => [
            ['id' => 1, 'name' => 'Полный'],
            ['id' => 2, 'name' => 'Передний'],
        ],
        'car_brands' => [
            ['id' => 1, 'name' => 'Lexus'],
            ['id' => 2, 'name' => 'Toyota'],
            ['id' => 3, 'name' => 'Renault'],
            ['id' => 4, 'name' => 'Peugeot'],
            ['id' => 5, 'name' => 'Lada'],
        ],
        'brand_models' => [
            ['id' => 1, 'brand_id' => 1, 'name' => 'ES'],
            ['id' => 2, 'brand_id' => 1, 'name' => 'GX'],
            ['id' => 3, 'brand_id' => 2, 'name' => 'Camry'],
            ['id' => 4, 'brand_id' => 2, 'name' => 'Corolla'],
            ['id' => 5, 'brand_id' => 3, 'name' => 'Logan'],
            ['id' => 6, 'brand_id' => 3, 'name' => 'Captur'],
            ['id' => 7, 'brand_id' => 4, 'name' => '4008'],
            ['id' => 8, 'brand_id' => 4, 'name' => 'RCZ'],
            ['id' => 9, 'brand_id' => 5, 'name' => 'Kalina'],
            ['id' => 10, 'brand_id' => 5, 'name' => 'Granta'],
        ],
        'cars' => [
            ['id' => 1, 'model_id' => 1, 'engine_type_id' => 2, 'drive_wheel_id' => 1],
            ['id' => 2, 'model_id' => 1, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
            ['id' => 3, 'model_id' => 2, 'engine_type_id' => 3, 'drive_wheel_id' => 1],
            ['id' => 4, 'model_id' => 2, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
            ['id' => 5, 'model_id' => 3, 'engine_type_id' => 1, 'drive_wheel_id' => 1],
            ['id' => 6, 'model_id' => 3, 'engine_type_id' => 2, 'drive_wheel_id' => 2],
            ['id' => 7, 'model_id' => 4, 'engine_type_id' => 2, 'drive_wheel_id' => 1],
            ['id' => 8, 'model_id' => 4, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
            ['id' => 9, 'model_id' => 5, 'engine_type_id' => 3, 'drive_wheel_id' => 1],
            ['id' => 10, 'model_id' => 5, 'engine_type_id' => 2, 'drive_wheel_id' => 2],
            ['id' => 11, 'model_id' => 6, 'engine_type_id' => 1, 'drive_wheel_id' => 1],
            ['id' => 12, 'model_id' => 6, 'engine_type_id' => 2, 'drive_wheel_id' => 1],
            ['id' => 13, 'model_id' => 7, 'engine_type_id' => 3, 'drive_wheel_id' => 2],
            ['id' => 14, 'model_id' => 7, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
            ['id' => 15, 'model_id' => 8, 'engine_type_id' => 2, 'drive_wheel_id' => 1],
            ['id' => 16, 'model_id' => 8, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
            ['id' => 17, 'model_id' => 9, 'engine_type_id' => 3, 'drive_wheel_id' => 1],
            ['id' => 18, 'model_id' => 9, 'engine_type_id' => 3, 'drive_wheel_id' => 2],
            ['id' => 19, 'model_id' => 10, 'engine_type_id' => 1, 'drive_wheel_id' => 1],
            ['id' => 20, 'model_id' => 10, 'engine_type_id' => 1, 'drive_wheel_id' => 2],
        ],
    ];

    public function safeUp() {
        $this->createTable('engine_types', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);

        $this->createTable('drive_wheels', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);

        $this->createTable('car_brands', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);

        $this->createTable('brand_models', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer()->notNull(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);

        $this->addFK('brand_models', 'brand_id', 'car_brands');

        $this->createTable('cars', [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer()->notNull(),
            'engine_type_id' => $this->integer()->notNull(),
            'drive_wheel_id' => $this->integer()->notNull(),
        ]);

        $this->addFK('cars', 'model_id', 'brand_models');
        $this->addFK('cars', 'engine_type_id', 'engine_types');
        $this->addFK('cars', 'drive_wheel_id', 'drive_wheels');

        foreach (self::FIXTURES as $table => $rows) {
            foreach ($rows as $columns)
                $this->insert($table, $columns);
        }
    }

    public function safeDown() {
        $tables = (new Query())
            ->from('information_schema.tables')
            ->where("table_schema = schema() and table_type = 'base table' and table_name != 'migration'")
            ->select('table_name')
            ->column();

        $this->db->createCommand()->checkIntegrity(false)->execute();
        array_walk($tables, [$this, 'dropTable']);
        $this->delete('migration', 'version != "m000000_000000_base"');
        $this->db->createCommand()->checkIntegrity(true)->execute();
    }

    private function addFK($table, $column, $refTable, $refColumn = 'id', $onDelete = 'CASCADE') {
        $this->addForeignKey(
            "fk-$table-$column-$refTable-$refColumn",
            $table,
            $column,
            $refTable,
            $refColumn,
            $onDelete
        );
    }
}
