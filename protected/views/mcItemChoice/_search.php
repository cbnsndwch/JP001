<?php
/* @var $this McItemChoiceController */
/* @var $model MCItemChoice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mc_item_id'); ?>
		<?php echo $form->textField($model,'mc_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correct'); ?>
		<?php echo $form->textField($model,'correct'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_position'); ?>
		<?php echo $form->textField($model,'original_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keep_position'); ?>
		<?php echo $form->textField($model,'keep_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'choice'); ?>
		<?php echo $form->textArea($model,'choice',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->