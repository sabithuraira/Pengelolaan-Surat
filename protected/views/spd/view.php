<?php
/* @var $this SpdController */
/* @var $model DataSpd */

$this->breadcrumbs=array(
	'Data SPD'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Data SPD', 'url'=>array('index')),
	array('label'=>'Create Data SPD', 'url'=>array('create')),
	array('label'=>'Update Data SPD', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Data SPD', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Data SPD #<?php echo $model->nomor_spd; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor_spd',
		'nama',
		'jabatan',
		'berangkat_dari',
		'tujuan',
		'lama',
		'tgl_berangkat',
		'tgl_kembali',
		'upload_file',
		'created_by',
		'created_time',
		'updated_by',
		'updated_time',
	),
)); ?>
