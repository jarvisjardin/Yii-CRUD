<?php
/* @var $this MealtrackingController */
/* @var $model Mealtracking */

$this->breadcrumbs=array(
	'Meals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Meal List', 'url'=>array('index')),
	array('label'=>'Log New Meal', 'url'=>array('create')),
	array('label'=>'Cancel Update Meal', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Meal<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>