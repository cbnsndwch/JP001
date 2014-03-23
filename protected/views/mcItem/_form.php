<?php
/* @var $this McItemController */
/* @var $model MCItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mcitem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author'); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation_date'); ?>
		<?php echo $form->textArea($model,'creation_date',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edit_date'); ?>
		<?php echo $form->textArea($model,'edit_date',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'edit_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published_date'); ?>
		<?php echo $form->textArea($model,'published_date',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'published_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listed'); ?>
		<?php echo $form->textField($model,'listed'); ?>
		<?php echo $form->error($model,'listed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stem'); ?>
		<?php echo $form->textArea($model,'stem',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->