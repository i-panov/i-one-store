<?php

namespace app\controllers;

use app\models\Car;
use app\models\CarBrand;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SiteController extends Controller {
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCatalog($brand, $model) {
        $request = \Yii::$app->request;
        $brandModel = null; $modelModel = null;

        if ($brand) {
            $brandModel = CarBrand::findOne(['name' => $brand]);

            if (!$brandModel)
                throw new NotFoundHttpException('Не найдена такая марка машин');
        }

        if ($brandModel && $model) {
            $modelModel = $brandModel->getModels()->where(['name' => $model])->one();

            if (!$modelModel)
                throw new NotFoundHttpException("Не найдена такая модель машин среди марки $brand");
        }

        $query = Car::find()->innerJoinWith(['brand b', 'model m'])->filterWhere(['b.name' => $brand, 'm.name' => $model]);

        if ($request->isPost && $request->isAjax) {
            $engineType = $request->post('engineType');
            $driveWheel = $request->post('driveWheel');
            $query->innerJoinWith(['engineType e', 'driveWheel d'])->andFilterWhere(['e.name' => $engineType, 'd.name' => $driveWheel]);
        }

        return $this->render('catalog', ['brand' => $brandModel, 'model' => $modelModel, 'query' => $query]);
    }
}
