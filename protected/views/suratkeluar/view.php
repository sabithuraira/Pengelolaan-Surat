<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluar'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Surat Keluar', 'url'=>array('index')),
	array('label'=>'Tambah Surat Keluar', 'url'=>array('create')),
	array('label'=>'Update Surat Keluar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Surat Keluar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Surat Keluar #<?php echo $model->nomor_surat; ?></h1>

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
		//'created_by',
		//'updated_by',
		'created_time',
		'updated_time',
	),
)); ?>
