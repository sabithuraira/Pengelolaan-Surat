<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuk'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Surat Masuk', 'url'=>array('index')),
	array('label'=>'Tambah Surat Masuk', 'url'=>array('create')),
	array('label'=>'Detail Surat Masuk', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Perbaharui Surat Masuk <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>