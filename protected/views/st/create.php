<?php
/* @var $this StController */
/* @var $model DataSt */

$this->breadcrumbs=array(
	'Data  Surat Tugas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Data Surat Tugas', 'url'=>array('index')),
);
?>

<h1>Create DataSt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>