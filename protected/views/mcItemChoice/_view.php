<?php
/* @var $this McItemChoiceController */
/* @var $data MCItemChoice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mc_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->mc_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correct')); ?>:</b>
	<?php echo CHtml::encode($data->correct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_position')); ?>:</b>
	<?php echo CHtml::encode($data->original_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keep_position')); ?>:</b>
	<?php echo CHtml::encode($data->keep_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('choice')); ?>:</b>
	<?php echo CHtml::encode($data->choice); ?>
	<br />


</div>