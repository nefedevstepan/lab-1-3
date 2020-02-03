<?php

namespace app\models;

class Product extends ActiveRecord implements CartPositionInterface
{
    use CartPositionTrait;

    public function getPrice()
    {
        return $this->price;
    }

    public function getId()
    {
        return $this->id;
    }
}

class ProductCartPosition extends Object implements CartPositionInterface
{
    /**
     * @var Product
     */
    protected $_product;

    public $id;

    public function getId()
    {
        return $this->id;
    }

    public function getPrice()
    {
        return $this->getProduct()->price;
    }

    /**
     * @return Product
    */
    public function getProduct()
    {
        if ($this->_product === null) {
            $this->_product = Product::findOne($this->id);
        }
        return $this->_product;
    }
}
class ProductCartPosition extends Object implements CartPositionInterface
{
    public $id;
    public $price;
    public $color;

    //...
    public function getId()
    {
        return md5(serialize([$this->id, $this->price, $this->color]));
    }

    //...
}