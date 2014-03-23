<?php
/* @var $this McItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcitems',
);

$this->menu=array(
	array('label'=>'Create MCItem', 'url'=>array('create')),
	array('label'=>'Manage MCItem', 'url'=>array('admin')),
);
?>

<h1>Mcitems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
