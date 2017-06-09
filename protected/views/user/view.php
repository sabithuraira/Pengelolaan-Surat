<?php
/* @var $this UserController */
/* @var $model MemUser */

$this->breadcrumbs=array(
	'Mem Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MemUser', 'url'=>array('index')),
	array('label'=>'Create MemUser', 'url'=>array('create')),
	array('label'=>'Update MemUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MemUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MemUser', 'url'=>array('admin')),
);
?>

<h1>View MemUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'password',
		'created_time',
		'last_login',
	),
)); ?>
