<?php
/* @var $this McItemController */
/* @var $model MCItem */

$this->breadcrumbs=array(
	'Mcitems'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCItem', 'url'=>array('index')),
	array('label'=>'Create MCItem', 'url'=>array('create')),
	array('label'=>'Update MCItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCItem', 'url'=>array('admin')),
);
?>

<h1>View MCItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'author',
		'creation_date',
		'edit_date',
		'published_date',
		'listed',
		'stem',
	),
)); ?>
