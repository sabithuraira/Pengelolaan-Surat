<?php
/* @var $this UserController */
/* @var $model MemUser */

$this->breadcrumbs=array(
	'Mem Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MemUser', 'url'=>array('index')),
	array('label'=>'Create MemUser', 'url'=>array('create')),
	array('label'=>'View MemUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MemUser', 'url'=>array('admin')),
);
?>

<h1>Update MemUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>