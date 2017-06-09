<?php
/* @var $this UserController */
/* @var $model MemUser */

$this->breadcrumbs=array(
	'Mem Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MemUser', 'url'=>array('index')),
	array('label'=>'Manage MemUser', 'url'=>array('admin')),
);
?>

<h1>Create MemUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>