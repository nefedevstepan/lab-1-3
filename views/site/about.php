<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\jui\DatePicker;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<? if (Yii::$app->user->can('moder')) {
	echo "
    <p>
      aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaad
    </p>";
};
?>


</div>
<?= DatePicker::widget(['name' => 'attributeName']) ?>
