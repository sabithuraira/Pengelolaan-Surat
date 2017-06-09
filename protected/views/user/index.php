<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mem Users',
);

$this->menu=array(
	array('label'=>'Create MemUser', 'url'=>array('create')),
	array('label'=>'Manage MemUser', 'url'=>array('admin')),
);
?>

<h1>Mem Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
