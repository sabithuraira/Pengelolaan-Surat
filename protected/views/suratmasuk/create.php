<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuk'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Surat Masuk', 'url'=>array('index')),
);
?>

<h1>Tambah Surat Masuk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>