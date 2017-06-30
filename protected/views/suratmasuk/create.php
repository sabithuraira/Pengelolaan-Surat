<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SuratMasuk', 'url'=>array('index')),
	array('label'=>'Manage SuratMasuk', 'url'=>array('admin')),
);
?>

<h1>Create SuratMasuk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>