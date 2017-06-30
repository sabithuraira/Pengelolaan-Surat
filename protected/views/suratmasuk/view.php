<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuk'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Surat Masuk', 'url'=>array('index')),
	array('label'=>'Tambah Surat Masuk', 'url'=>array('create')),
	array('label'=>'Update Surat Masuk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Surat Masuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Surat Masuk #<?php echo $model->nomor_surat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_surat',
		'tgl_terima',
		'nomor_surat',
		'perihal_surat',
		'tgl_surat_masuk',
		'asal_surat',
		'file_surat',
		'ket',
		//'created_by',
		//'updated_by',
		'created_time',
		'updated_time',
	),
)); ?>
