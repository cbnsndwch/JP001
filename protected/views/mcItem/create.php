<?php
/* @var $this McItemController */
/* @var $model MCItem */

$this->breadcrumbs=array(
	'Mcitems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCItem', 'url'=>array('index')),
	array('label'=>'Manage MCItem', 'url'=>array('admin')),
);
?>

<h1>Create MCItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>