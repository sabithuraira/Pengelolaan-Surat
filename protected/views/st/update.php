<?php
/* @var $this StController */
/* @var $model DataSt */

$this->breadcrumbs=array(
	'Data Surat Tugas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data Surat Tugas', 'url'=>array('index')),
	array('label'=>'Create Data Surat Tugas', 'url'=>array('create')),
	array('label'=>'View Data Surat Tugas', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Data Surat Tugas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>