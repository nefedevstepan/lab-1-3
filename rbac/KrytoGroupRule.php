<?php
namespace app\rbac;
 
use Yii;
use yii\rbac\Rule;
 
class KrytoGroupRule extends Rule
{
    public $name = 'isKryto';
 
    public function execute($user, $item, $params)
    {
        return  $params['post']->author_id == $user ? true : false;
    }
}