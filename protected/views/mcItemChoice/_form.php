<?php
/* @var $this McItemChoiceController */
/* @var $model MCItemChoice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mcitem-choice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mc_item_id'); ?>
		<?php echo $form->textField($model,'mc_item_id'); ?>
		<?php echo $form->error($model,'mc_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correct'); ?>
		<?php echo $form->textField($model,'correct'); ?>
		<?php echo $form->error($model,'correct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_position'); ?>
		<?php echo $form->textField($model,'original_position'); ?>
		<?php echo $form->error($model,'original_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keep_position'); ?>
		<?php echo $form->textField($model,'keep_position'); ?>
		<?php echo $form->error($model,'keep_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'choice'); ?>
		<?php echo $form->textArea($model,'choice',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'choice'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->