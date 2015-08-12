<?php
/* @var $this MealtrackingController */
/* @var $model Mealtracking */

$this->breadcrumbs=array(
	'Meals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Meal List', 'url'=>array('index')),
);
?>

<h1>Log New Meal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>