<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SuratKeluar', 'url'=>array('index')),
	array('label'=>'Create SuratKeluar', 'url'=>array('create')),
	array('label'=>'View SuratKeluar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SuratKeluar', 'url'=>array('admin')),
);
?>

<h1>Update SuratKeluar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>