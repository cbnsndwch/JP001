<?php
/* @var $this McItemChoiceController */
/* @var $model MCItemChoice */

$this->breadcrumbs=array(
	'Mcitem Choices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCItemChoice', 'url'=>array('index')),
	array('label'=>'Manage MCItemChoice', 'url'=>array('admin')),
);
?>

<h1>Create MCItemChoice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>