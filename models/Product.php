<?php
namespace app\models;
class Product extends ActiveRecord implements CartPositionProviderInterface
{
    public function getCartPosition()
    {
        return \Yii::createObject([
            'class' => 'app\models\ProductCartPosition',
            'id' => $this->id,
        ]);
    }
}
