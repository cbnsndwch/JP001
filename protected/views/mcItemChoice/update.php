<?php
/* @var $this McItemChoiceController */
/* @var $model MCItemChoice */

$this->breadcrumbs=array(
	'Mcitem Choices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCItemChoice', 'url'=>array('index')),
	array('label'=>'Create MCItemChoice', 'url'=>array('create')),
	array('label'=>'View MCItemChoice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCItemChoice', 'url'=>array('admin')),
);
?>

<h1>Update MCItemChoice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>