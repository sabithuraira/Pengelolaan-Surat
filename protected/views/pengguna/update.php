<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->id_pengguna=>array('view','id'=>$model->id_pengguna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Create Pengguna', 'url'=>array('create')),
	array('label'=>'View Pengguna', 'url'=>array('view', 'id'=>$model->id_pengguna)),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>

<h1>Update Pengguna <?php echo $model->id_pengguna; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>