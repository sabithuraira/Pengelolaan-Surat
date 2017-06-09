<?php
/* @var $this StController */
/* @var $model DataSt */

$this->breadcrumbs=array(
	'Data  Surat Tugas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Data Surat Tugas', 'url'=>array('index')),
	array('label'=>'Create Data Surat Tugas', 'url'=>array('create')),
	array('label'=>'Update Data Surat Tugas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Data Surat Tugas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Data Surat Tugas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor_st',
		'dasar_st',
		'tujuan',
		'lama',
		'tgl_tugas',
		'nama_petugas',
		'jabatan',
		'tt',
		'upload_file',
		'created_by',
		'created_time',
		'updated_by',
		'updated_time',
	),
)); ?>
