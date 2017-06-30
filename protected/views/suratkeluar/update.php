<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluar'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Surat Keluar', 'url'=>array('index')),
	array('label'=>'Tambah Surat Keluar', 'url'=>array('create')),
	array('label'=>'View Surat Keluar', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Perbaharui Surat Keluar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>