<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->id_pengguna,
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Create Pengguna', 'url'=>array('create')),
	array('label'=>'Update Pengguna', 'url'=>array('update', 'id'=>$model->id_pengguna)),
	array('label'=>'Delete Pengguna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengguna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>

<h1>View Pengguna #<?php echo $model->id_pengguna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengguna',
		'username',
		'password',
		'enkrip',
		'email',
		'id_level',
	),
)); ?>
