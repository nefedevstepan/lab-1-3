<?php
namespace app\rbac;
 
use Yii;
use yii\rbac\Rule;
 
class AdminGroupRule extends Rule
{
    public $name = 'isAdmin';
 
    public function execute($user, $item, $params)
    {
        return  $params['post']->author_id == $user ? true : false;
    }
}