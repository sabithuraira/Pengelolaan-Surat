<?php
/* @var $this SkController */
/* @var $model DataSk */

$this->breadcrumbs=array(
	'Data SK'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Data SK', 'url'=>array('index')),
);
?>

<h1>Tambah Data SK</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>