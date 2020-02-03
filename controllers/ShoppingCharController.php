<?php

namespace app\controllers;

use Yii;
use app/models/ProductCartPosition;
use app/models/Product;
use ;
use ;
use ;
use ;
use ;
use ;



public function actionAddToCart($id)
{
    $cart = Yii::$app->cart;

    $model = Product::findOne($id);
    if ($model) {
        $cart->put($model, 1);
        return $this->redirect(['cart-view']);
    }
    throw new NotFoundHttpException();
}