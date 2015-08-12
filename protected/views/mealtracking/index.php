<?php
/* @var $this MealtrackingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Meals',
);

$this->menu=array(
	array('label'=>'Log New Meal', 'url'=>array('create'))
);
?>

<h1>Meals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
