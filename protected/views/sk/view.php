<?php
/* @var $this SkController */
/* @var $model DataSk */

$this->breadcrumbs=array(
	'Data SK'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Data SK', 'url'=>array('index')),
	array('label'=>'Create Data SK', 'url'=>array('create')),
	array('label'=>'Update Data SK', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Data SK', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Data SK #<?php echo $model->nomor_sk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor_sk',
		'tentang',
		'tgl_penetapan',
		'berlaku',
		'tt',
		'upload_file',
		'created_by',
		'created_time',
		'updated_by',
		'updated_time',
	),
)); ?>
