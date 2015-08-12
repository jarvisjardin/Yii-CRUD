<?php
/* @var $this MealtrackingController */
/* @var $model Mealtracking */

$this->breadcrumbs=array(
	'Meals'=>array('index'),
	$model->description,
);

$this->menu=array(
	array('label'=>'Meal List', 'url'=>array('index')),
	array('label'=>'Log New Meal', 'url'=>array('create')),
	array('label'=>'Update Meal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Meal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->description; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'description',
		'calories',
		'datecreated',
	),
)); ?>
