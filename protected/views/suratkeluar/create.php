<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluar'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Surat Keluar', 'url'=>array('index')),
);
?>

<h1>Tambah Surat Keluar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>