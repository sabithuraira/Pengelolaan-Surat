<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SuratKeluar', 'url'=>array('index')),
	array('label'=>'Create SuratKeluar', 'url'=>array('create')),
	array('label'=>'Update SuratKeluar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SuratKeluar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SuratKeluar', 'url'=>array('admin')),
);
?>

<h1>View SuratKeluar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor_surat',
		'tanggal_surat_keluar',
		'perihal_surat',
		'tujuan_surat',
		'file_surat',
		'keterangan',
		'created_by',
		'updated_by',
		'created_time',
		'updated_time',
	),
)); ?>
