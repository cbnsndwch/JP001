<?php
/* @var $this McItemChoiceController */
/* @var $model MCItemChoice */

$this->breadcrumbs=array(
	'Mcitem Choices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCItemChoice', 'url'=>array('index')),
	array('label'=>'Create MCItemChoice', 'url'=>array('create')),
	array('label'=>'Update MCItemChoice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCItemChoice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCItemChoice', 'url'=>array('admin')),
);
?>

<h1>View MCItemChoice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mc_item_id',
		'correct',
		'original_position',
		'keep_position',
		'choice',
	),
)); ?>
