<?php
/* @var $this McItemController */
/* @var $model MCItem */

$this->breadcrumbs=array(
	'Mcitems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCItem', 'url'=>array('index')),
	array('label'=>'Create MCItem', 'url'=>array('create')),
	array('label'=>'View MCItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCItem', 'url'=>array('admin')),
);
?>

<h1>Update MCItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>