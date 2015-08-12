<?php
/* @var $this MealtrackingController */
/* @var $data Mealtracking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->description), array('view', 'id'=>$data->id)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('calories')); ?>:</b>
	<?php echo CHtml::encode($data->calories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreated')); ?>:</b>
	<?php echo CHtml::encode($data->datecreated); ?>
	<br />

</div>