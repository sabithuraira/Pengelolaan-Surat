<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SuratMasuk', 'url'=>array('index')),
	array('label'=>'Create SuratMasuk', 'url'=>array('create')),
	array('label'=>'Update SuratMasuk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SuratMasuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SuratMasuk', 'url'=>array('admin')),
);
?>

<h1>View SuratMasuk #<?php echo $model->id; ?></h1>

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
		'created_by',
		'updated_by',
		'created_time',
		'updated_time',
	),
)); ?>
