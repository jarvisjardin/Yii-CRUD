<?php
/* @var $this MealtrackingController */
/* @var $model Mealtracking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mealtracking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'users_id',array('value'=>Yii::app()->user->userData['id'])); ?>
		<?php echo $form->hiddenField($model,'startdatetime', array('value'=>date('Y-m-d H:i:s'))); ?>
		<?php echo $form->hiddenField($model,'datecreated' ,array('value'=>date('Y-m-d H:i:s'))); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calories'); ?>
		<?php echo $form->textField($model,'calories'); ?>
		<?php echo $form->error($model,'calories'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->