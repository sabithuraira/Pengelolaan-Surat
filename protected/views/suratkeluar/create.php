<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SuratKeluar', 'url'=>array('index')),
	array('label'=>'Manage SuratKeluar', 'url'=>array('admin')),
);
?>

<h1>Create SuratKeluar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>